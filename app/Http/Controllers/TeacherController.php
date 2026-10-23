<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //Dashboard
    public function DashboardTeacher(){
        return view("Espace Formateur/Dashboard/Dashboard");

    }

    //Evaluation

    public function InsertExercise(){
        return view("Espace Formateur/Evaluation/form_ajout_exercice");
    }
    public function InsertCorrection(){
        return view("Espace Formateur/Evaluation/form_ajout_correction");
    }
    public function ListExercise(){
        return view("Espace Formateur/Evaluation/Exercice");
    }
    public function ListCorrection(){
        return view("Espace Formateur/Evaluation/Correction");
    }


    //Cours et formations
    public function Courses(){
        return view("Espace Formateur/Formations et Cours/cours");
    }
    public function InsertCourses(){
        return view("Espace Formateur/Formations et Cours/form_ajout_cours");
    }
    
    public function Programs(){
        return view("Espace Formateur/Formations et Cours/formations");
    }

    public function CoursesFile(){
        return view("Espace Formateur/Formations et Cours/fichier_de_cours");
    }

    public function InsertCoursesFile(){
        return view("Espace Formateur/Formations et Cours/form_ajout_fichier_cours");
    }

    
    public function Video(){
        return view("Espace Formateur/Formations et Cours/Video_de_cours");
    }

    
    public function InsertVideo(){
        return view("Espace Formateur/Formations et Cours/form_ajout_video_cours");
    }

    
    //Groupes

    public function Groups(){
        return view("Espace Formateur/Groupes/groupes");
    }
    

    //Visioconférence

    public function Videoconference(){
        return view("Espace Formateur/Visioconférence/visio");
    }
    public function InsertVideoconference(){
        return view("Espace Formateur/Visioconférence/form_ajout_visio");
    }
}
