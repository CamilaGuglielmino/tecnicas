<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()   {

    $vistas = view('Noticias/header').
              view('Noticias/noticia').                  
              view('Noticias/footer');
    return $vistas;
    }
    
}
