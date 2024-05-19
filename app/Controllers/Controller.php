<?php

namespace App\Controllers;

class Controller extends BaseController
{
    public function index(): string
    {
        // Obtener la URL actual
        $data['current_url'] = current_url(); // Utiliza la función helper current_url()

        return view('index', $data);
    }

    public function acerca(): string
    {
        // Obtener la URL actual
        $data['current_url'] = current_url(); // Utiliza la función helper current_url()

        return view('acerca', $data);
    }

    public function noticias(): string
    {
        // Obtener la URL actual
        $data['current_url'] = current_url(); // Utiliza la función helper current_url()

        return view('noticias/inicio-noticias', $data);
    }

    public function progreso(): string
    {
        // Obtener la URL actual
        $data['current_url'] = current_url(); // Utiliza la función helper current_url()

        return view('progreso/progreso', $data);
    }

    public function cursos(): string
    {
        // Obtener la URL actual
        $data['current_url'] = current_url(); // Utiliza la función helper current_url()

        return view('cursos/inicio-cursos', $data);
    }

    //Noticias
    
    public function noti1(): string
    {
        return view('noticias/noti1');
    }

    public function noti2(): string
    {
        return view('noticias/noti2');
    }

    public function noti3(): string
    {
        return view('noticias/noti3');
    }
}
