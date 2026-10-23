<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function DashboardAdmin(){
        return view("FrontEnd/Espace Administateur/Dashboard/index");
    }
}
