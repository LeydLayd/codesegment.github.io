<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

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
            'ConfirmPassword' => 'required|max_length[255]|matches[password]',
        ];

        

        if (!$this->validate($reglas)){
            return view("Login\Sign_up");
        }

        $nombre = $this->request->getPost("Nombre");
        $apellidos = $this->request->getPost("Nombre");
        $correo = $this->request->getPost("Nombre");
        $pasword = $this->request->getPost("Nombre");

        $completo = $nombre." ". $apellidos;

        $data = [
            'Nombre_usuario' => $completo,
            'Correo_electronico' => $correo,
            'Contrasena' => $pasword
        ];

        $usuario = new UsuariosModel();

        echo $usuario->insert($data);
    }

    public function Logear(){
        print_r($_POST);
        $nombreUsuario = $this->request->getPost('Input');
        $contrasena = $this->request->getPost('Password');

        $usuario = new UsuariosModel();

        $usuario->where('nombre_de_usuario', $nombreUsuario)
        ->where('contrasena', $contrasena)
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