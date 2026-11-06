<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    //Cours

    public function Courses(){
        return view("Espace Apprenant.Cours.index");
    }
    public function Dashboard(){
        return view("Espace Apprenant.Dashboard.index");
    }
    public function CoursesFile(){
        return view("Espace Apprenant.Cours.Mes_fichiers_de_cours");
    }

    //Exercices

    public function Homeworks(){
        return view("Espace Apprenant.Evaluation.Exercices");
    }
    public function Corrections(){
        return view("Espace Apprenant.Evaluation.Corrections");
    }


    //Formateur
    public function Teachers(){
        return view("Espace Apprenant.Formateur.liste_formateurs");
    }

    //Visioconférence
    public function Videoconference(){
        return view("Espace Apprenant.Visioconférence.visio");
    }

    //Résultats
    public function Results(){
        return view("Espace Apprenant.Résultats.index");
    }

    //Annonces et événements
    public function Announcements(){
        return view("Espace Apprenant.Annonces & evenements.index");
    }

    //Profil
    public function Profile(){
        return view("Espace Apprenant.Apprenant.Profil_apprenant");
    }

    public function UpdateProfile(){
        return redirect()->route('Student.profile');
    }
}
