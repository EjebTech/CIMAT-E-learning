<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Cours

    public function Courses(){
        return view("Espace Apprenant/Cours/index");
    }
    public function CoursesFile(){
        return view("Espace Apprenant/Cours/Mes_fichiers_de_cours");
    }
    //Exercices

    public function Exercises(){
        return view("Espace Apprenant/Evaluation/Exercices");
    }
    public function Corrections(){
        return view("Espace Apprenant/Evaluation/Corrections");
    }
    

    //Formateur
    public function Teachers(){
        return view("Espace Apprenant/Formateur/liste_formateurs");
    }

    //Visioconférence
    public function Videoconference(){
        return view("Espace Apprenant/Visioconférence/visio");
    }
}
