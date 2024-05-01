<?php

namespace App\Controllers;

class Login extends BaseController{
    public function Log(): string
    {
        return view("Login\Login");
    }

    public function Sign(): string
    {
        return view("Login\Sign_up");
    }
}