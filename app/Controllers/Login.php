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
            'Nombre' => 'required|max_length[30]',
            'Apellidos' => 'required|max_length[30]',
            'Correo' => 'required|max_length[254]|valid_email',
            'Password' => 'required|max_length[255]|min_length[10]',
            'ConfirmPassword' => 'required|max_length[255]|matches[Password]',
        ];

        

        if (!$this->validate($reglas)){
            return view("Login\Sign_up");
        }

        $nombre = $this->request->getPost("Nombre");
        $apellidos = $this->request->getPost("Apellidos");
        $correo = $this->request->getPost("Correo");
        $pasword = $this->request->getPost("Password");

        $completo = $nombre." ". $apellidos;

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
        print_r($_POST);
        $nombreUsuario = $this->request->getPost('Input');
        $contrasena = $this->request->getPost('Password');

        $usuario = new UserModel();

        $user = $usuario->where('Correo_electronico', $nombreUsuario)
        ->where('Password', $contrasena)
        ->first();
        
        if ($user !== null) {
            session()->setFlashdata('Usuario',$user);
            return redirect()->to(base_url('/'));
          
        } else {
            echo 'Credenciales inválidas. Usuario no autenticado.';
        }
        
    }


}