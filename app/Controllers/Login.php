<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController{
    public function Log(): string
    {
        return view("Login\Login");
    }

    public function Sign(): string
    {
        return view("Login\Sign_up");
    }

    public function Registered(){

        $reglas = [
            'Nombre' => [
                'rules' =>'required|max_length[30]',
                'errors' => [
                    'required' => 'El campo nombre es obligatorio',
                    'max_length' => 'El campo no puede tener mas de 30 caracteres'
                ]
            ],
            'Apellidos' => [
                'rules' =>'required|max_length[30]',
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

        

        if (!$this->validate($reglas)){
            return view("Login\Sign_up");
        }

        $nombre = $this->request->getPost("Nombre");
        $apellidos = $this->request->getPost("Apellidos");
        $temp = $this->request->getPost("Correo");
        $pasword = $this->request->getPost("Password");

        $completo = $nombre." ". $apellidos;
        $correo = array_map('trim',$temp);
        
        $data = [
            'Nombre_usuario' => $completo,
            'Correo_electronico' => $correo,
            'Password' => $pasword
        ];

        $usuario = new UserModel();

        $setion = $usuario->insert($data);

        if ($setion !== null){
            session()->setFlashdata('Usuario',$data);
            return redirect()->to(base_url('/'));
        }
    }

    public function Logear(){
        $reglas = [
            'Input' => [
                'rules' => 'required|max_length[254]|valid_email|is_not_unique[usuarios.Correo_electronico]',
                'errors' => [
                    'required' => 'El campo correo es obligatorio',
                    'max_length' => 'Excede el tamaño permitido de caracteres',
                    'is_not_unique' => 'Usuario o contraseña no validos Verifique y vuelva a intentar'
                ]
            ],
            'Password' => [
                'rules' => 'required|max_length[255]|min_length[8]|is_not_unique[usuarios.Password]',
                'errors' => [
                    'required' => 'Contraseña obligatoria',
                    'min_length' => 'La contraseña tiene que tener minimo 8 caracteres',
                    'is_not_unique' => 'Usuario o contraseña no validos Verifique y vuelva a intentar'
                ]
            ],
        ];
        if (!$this->validate($reglas)){
            return view("Login\Login");
        }

        $nombreUsuario = $this->request->getPost('Input');
        $contrasena = $this->request->getPost('Password');

        $usuario = new UserModel();

        $user = $usuario->where('Correo_electronico', $nombreUsuario)
        ->where('Password', $contrasena)
        ->first();   
   
        session()->setFlashdata('Usuario',$user);
        return redirect()->to(base_url('/')); 
    }


}