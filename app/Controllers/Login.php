<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function Log(): string
    {
        return view("Login\Login");
    }

    public function Sign(): string
    {
        return view("Login\Sign_up");
    }

    public function Registered()
    {
        $ss = $this->session->get('Nombre_usuario');
        if ($ss !== null){
            $this->session->destroy(); 
        }

        $reglas = [
            'Nombre' => [
                'rules' => 'required|max_length[30]',
                'errors' => [
                    'required' => 'El campo nombre es obligatorio',
                    'max_length' => 'El campo no puede tener mas de 30 caracteres'
                ]
            ],
            'Apellidos' => [
                'rules' => 'required|max_length[30]',
                'errors' => [
                    'required' => 'El campo apellidos es obligatorio',
                    'max_length' => 'El campo no puede tener mas de 40 caracteres'
                ]
            ],
            'Correo' => [
                'rules' => 'required|max_length[254]|valid_email|is_unique[usuarios.Correo_electronico]',
                'errors' => [
                    'required' => 'El campo correo es obligatorio',
                    'max_length' => 'Excede el tamaño permitido de caracteres',
                    'is_unique' => 'Ya hay un usuario con ese correo electronico'
                ]
            ],
            'Password' => [
                'rules' => 'required|max_length[255]|min_length[8]',
                'errors' => [
                    'required' => 'Contraseña obligatoria',
                    'min_length' => 'La contraseña tiene que tener minimo 8 caracteres'
                ]
            ],
            'ConfirmPassword' => [
                'rules' => 'required|max_length[255]|matches[Password]',
                'errors' => [
                    'required' => 'Necesitas confirmar la contraseña',
                    'matches' => 'Las contraseñas no coinciden'
                ]
            ],
        ];



        if (!$this->validate($reglas)) {
            return view("Login\Sign_up");
        }

        $nombre = $this->request->getPost("Nombre");
        $apellidos = $this->request->getPost("Apellidos");
        $temp = $this->request->getPost("Correo");
        $pasword = $this->request->getPost("Password");

        $completo = $nombre . " " . $apellidos;
        $correo = trim($temp);

        $data = [
            'Nombre_usuario' => $completo,
            'Correo_electronico' => $correo,
            'Password' => $pasword
        ];

        $this->session->set($data);
        $this->ValidateEmail();
        //return view('Login\Validation');
    }

    public function ValidateEmail()
    {
        $key = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        $this->session->setFlashdata('Key',$key);

        $email = \Config\Services::email();

        $email->setFrom('rojasdiego035@gmail.com', 'Code Segment');

        $correo = $this->session->get('Correo_electronico');
        $email->setTo($correo);
        $email->setSubject('Clave de acceso');

        $email->setMessage("<h1>Tu clave de acceso es: <strong>$key</strong></h1>");

        $email->send();

        echo view('Login\Validation');
    }

    public function save(){
        $SentKey = $this->session->getFlashdata('Key');

        $EnKey = $this->request->getPost('Input');

        if ($SentKey == $EnKey){
            $usuario = new UserModel();
            $data = [
                'Nombre_usuario' => $this->session->get('Nombre_usuario'),
                'Correo_electronico' => $this->session->get('Correo_electronico'),
                'Password' => $this->session->get('Password')
            ];

            $id = $usuario->insert($data);
            $this->session->set('ID_usuario',$id);
            return redirect()->to(base_url('/'));
        }
        else{
            $this->session->setFlashdata('Message','Codigo no valido, intenta de nuevo o revisa que sea correcto tu correo');
            return view('Login\Validation');
        }
    }

    public function Logear()
    {
        $reglas = [
            'Input' => [
                'rules' => 'required|max_length[254]|valid_email|is_not_unique[usuarios.Correo_electronico]',
                'errors' => [
                    'required' => 'El campo correo es obligatorio',
                    'max_length' => 'Excede el tamaño permitido de caracteres',
                    'is_not_unique' => 'Usuario no valido,verifique y vuelva a intentar'
                ]
            ],
            'Password' => [
                'rules' => 'required|max_length[255]|min_length[2]|is_not_unique[usuarios.Password]',
                'errors' => [
                    'required' => 'Contraseña obligatoria',
                    'min_length' => 'La contraseña tiene que tener minimo 8 caracteres',
                    'is_not_unique' => 'Contraseña no valida,verifique y vuelva a intentar'
                ]
            ],
        ];
        if (!$this->validate($reglas)) {
            return view("Login\Login");
        }

        $nombreUsuario = $this->request->getPost('Input');
        $contrasena = $this->request->getPost('Password');

        $usuario = new UserModel();

        $user = $usuario->where('Correo_electronico', $nombreUsuario)
            ->where('Password', $contrasena)
            ->first();

        $this->session->set($user);
        return redirect()->to(base_url('/'));
    }

    public function Logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('/'));
    }
}
