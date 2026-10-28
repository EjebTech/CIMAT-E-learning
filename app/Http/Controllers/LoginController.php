<?php

namespace App\Http\Controllers;



class LoginController extends Controller
{
    public function connexion(){
        return view("Authentification.index");
    }
    public function Inscription(){
        return view("Authentification.inscription");
    }
}
