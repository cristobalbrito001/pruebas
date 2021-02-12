<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __invoke(){ 
        $mens_home="esta es la vista de home";
        return $mens_home;
    } 
}
