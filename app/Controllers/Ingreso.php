<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Ingreso extends BaseController
{
    protected $ingreso;
    public function __construct()
    {
        $this->ingreso = new Ingreso();
    }
    public function index()
    {
        return view('Noticias/header');
    }
}

