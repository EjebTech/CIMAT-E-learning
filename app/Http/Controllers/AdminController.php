<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Dashboard
    public function DashboardAdmin(){
        return view("Espace Administrateur.Dashboard.index");
    }

    //Exercices
    public function UpdateExercise(){
        return view("Espace Administrateur.Exercice.modif_exercice");
    }
    public function InsertCorrection(){
        return view("Espace Administrateur.Exercice.ajout_correction");
    }
    public function InsertExercise(){
        return view("Espace Administrateur.Exercice.ajout_exercice");
    }
    public function ListExercise(){
        return view("Espace Administrateur.Exercice.Exercice");
    }
    public function ListCorrection(){
        return view("Espace Administrateur.Exercice.Correction");
    }

    //Cours et formations
    public function Courses(){
        return view("Espace Administrateur.Formation et cours.Cours");
    }
    public function InsertCourses(){
        return view("Espace Administrateur.Formation et cours.form_ajout_cours");
    }
    public function UpdateCourses(){
        return view("Espace Administrateur.Formation et cours.form_modif_cours");
    }

    public function Programs(){
        return view("Espace Administrateur.Formation et cours.Formation");
    }
    public function InsertPrograms(){
        return view("Espace Administrateur.Formation et cours.form_ajout_formation");
    }
    public function UpdatePrograms(){
        return view("Espace Administrateur.Formation et cours.form_modif_formation");
    }

    public function CoursesFile(){
        return view("Espace Administrateur.Formation et cours.fichier_de_cours");
    }
    public function InsertCoursesFile(){
        return view("Espace Administrateur.Formation et cours.form_ajout_fichier");
    }

    //Groupes

    public function Groups(){
        return view("Espace Administrateur.Groupe.liste_groupes");
    }
    public function InsertGroups(){
        return view("Espace Administrateur.Groupe.ajout_groupe");
    }
    public function UpdateGroups(){
        return view("Espace Administrateur.Groupe.modif_groupe");
    }
    public function AssignStudents(){
        return view("Espace Administrateur.Groupe.liste_apprenants");
    }



    //Utilisateurs

    public function InsertAdmin(){
        return view("Espace Administrateur.Utilisateurs.Administrateur.Ajout");
    }
    public function ListAdmin(){
        return view("Espace Administrateur.Utilisateurs.Administrateur.liste_administrateur");
    }
    public function UpdateAdmin(){
        return view("Espace Administrateur.Utilisateurs.Formateur.Modification");
    }
    public function InsertTeacher(){
        return view("Espace Administrateur.Utilisateurs.Formateur.Ajout");
    }
    public function ListTeacher(){
        return view("Espace Administrateur.Utilisateurs.Formateur.liste_formateur");
    }
    public function UpdateTeacher(){
        return view("Espace Administrateur.Utilisateurs.Formateur.Modification");
    }
    public function InsertStudent(){
        return view("Espace Administrateur.Utilisateurs.Participant.Ajout");
    }
    public function ListStudent(){
        return view("Espace Administrateur.Utilisateurs.Participant.liste_participant");
    }
    public function UpdateStudent(){
        return view("Espace Administrateur.Utilisateurs.Participant.Modification");
    }


    //Visioconférence

    public function VideoConference(){
        return view("Espace Administrateur.Visioconférence.visio");
    }
    public function InsertVideoConference(){
        return view("Espace Administrateur.Visioconférence.ajout_visio");

    }
}
