<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //metodos para crear rutas varibles desde una ruta su raiz 

    public function index(){
        $cargo_user="admin";
        return $cargo_user;
    }
    public function create(){
        return "en esta pagina podras crear un user";
    }

    public function show($id){
        return "su id es ".$id;
    }

}
