<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function connexion(){
        return view("index");
    }
    public function Inscription(){
        return view("inscription");
    }
}
