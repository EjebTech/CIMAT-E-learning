<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    // Dashboard
    public function DashboardAdmin()
    {
        return view('Espace Administrateur.Dashboard.index');
    }

    // Exercices et évaluations
    public function ListExercise()
    {
        return view('Espace Administrateur.Exercice.Exercice');
    }

    public function InsertExercise()
    {
        return view('Espace Administrateur.Exercice.Exercice');
    }

    public function UpdateExercise()
    {
        return view('Espace Administrateur.Exercice.Exercice');
    }

    public function ListCorrection()
    {
        return view('Espace Administrateur.Exercice.Correction');
    }

    public function InsertCorrection()
    {
        return view('Espace Administrateur.Exercice.Correction');
    }

    // Cours et formations
    public function Courses()
    {
        return view('Espace Administrateur.Formation et cours.Cours');
    }

    public function InsertCourses()
    {
        return view('Espace Administrateur.Formation et cours.Cours');
    }

    public function UpdateCourses()
    {
        return view('Espace Administrateur.Formation et cours.Cours');
    }

    public function Programs()
    {
        return view('Espace Administrateur.Formation et cours.Formation');
    }

    public function InsertPrograms()
    {
        return view('Espace Administrateur.Formation et cours.Formation');
    }

    public function UpdatePrograms()
    {
        return view('Espace Administrateur.Formation et cours.Formation');
    }

    // Groupes
    public function Groups()
    {
        return view('Espace Administrateur.Groupe.liste_groupes');
    }

    public function InsertGroups()
    {
        return view('Espace Administrateur.Groupe.liste_groupes');
    }

    public function UpdateGroups()
    {
        return view('Espace Administrateur.Groupe.liste_groupes');
    }

    public function AssignStudents()
    {
        return view('Espace Administrateur.Groupe.liste_apprenants');
    }

    // Utilisateurs : Administrateurs
    public function ListAdmin()
    {
        return view('Espace Administrateur.Utilisateurs.Administrateur.liste_administrateur');
    }

    public function InsertAdmin()
    {
        return view('Espace Administrateur.Utilisateurs.Administrateur.liste_administrateur');
    }

    public function UpdateAdmin()
    {
        return view('Espace Administrateur.Utilisateurs.Administrateur.liste_administrateur');
    }

    // Utilisateurs : Formateurs
    public function ListTeacher()
    {
        return view('Espace Administrateur.Utilisateurs.Formateur.liste_formateur');
    }

    public function InsertTeacher()
    {
        return view('Espace Administrateur.Utilisateurs.Formateur.liste_formateur');
    }

    public function UpdateTeacher()
    {
        return view('Espace Administrateur.Utilisateurs.Formateur.liste_formateur');
    }

    // Utilisateurs : Apprenants
    public function ListStudent()
    {
        return view('Espace Administrateur.Utilisateurs.Participant.liste_participant');
    }

    public function InsertStudent()
    {
        return view('Espace Administrateur.Utilisateurs.Participant.liste_participant');
    }

    public function UpdateStudent()
    {
        return view('Espace Administrateur.Utilisateurs.Participant.liste_participant');
    }

    // Visioconférence
    public function VideoConference()
    {
        return view('Espace Administrateur.Visioconférence.visio');
    }

    public function InsertVideoConference()
    {
        return view('Espace Administrateur.Visioconférence.visio');
    }
}
