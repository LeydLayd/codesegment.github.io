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
        print_r($_POST);

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
            'Contrasena' => $pasword
        ];

        $usuario = new UserModel();

        echo $usuario->insert($data);
    }

    public function Logear(){
        print_r($_POST);
        $nombreUsuario = $this->request->getPost('Input');
        $contrasena = $this->request->getPost('Password');

        $usuario = new UserModel();

        $usuario->where('Correo_electronico', $nombreUsuario)
        ->where('Contrasena', $contrasena)
        ->first();
        
        if ($usuario !== null) {
            echo 'Credenciales válidas. Usuario autenticado.';
            // Aquí puedes hacer algo con los datos del usuario, por ejemplo:
            //echo 'Nombre: ' . $usuario['nombre'];
            //echo 'Email: ' . $usuario['email'];
            // Y así sucesivamente con los demás campos del usuario
        } else {
            echo 'Credenciales inválidas. Usuario no autenticado.';
        }
        
    }


}