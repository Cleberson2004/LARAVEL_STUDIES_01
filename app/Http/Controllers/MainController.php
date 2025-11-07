<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index(){
        echo 'index';
    }
    
    public function about(){
        echo 'about';
    }
    
    public function mostrarValor($valor){
        echo 'Foi enviado o seguinte valor: ', $valor;
    }
}
