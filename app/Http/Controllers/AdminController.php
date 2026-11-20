<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStudentRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

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



    // Visioconférence
    public function VideoConference()
    {
        return view('Espace Administrateur.Visioconférence.visio');
    }

    public function InsertVideoConference()
    {
        return view('Espace Administrateur.Visioconférence.visio');
    }



    //Fonction permettant de lister les différents utilisateurs présent dans la bdd. compact sert à transformer la variable $students en un tableau associatif
    public function index():View{
        $students = Student::orderByDesc('MatStud')->paginate(6);
        $total_students = Student::count();
        return view('Espace Administrateur.Utilisateurs.Participant.liste_participant', compact('students','total_students'));

    }
    //créer un étudiant
    public function store(FormStudentRequest $request){

        $data_validated = $request->validated();
        //Après avoir validé les données on vérifie si le champ contient un fichier
        if($request->hasfile('PhotoStud')){
            //si c'est le cas on stock le fichier et on récupère son chemin relatif dans la valeur de Photostud
            $data_validated['PhotoStud'] = $request->file('PhotoStud')->store('students', 'public');
        }
        //puis on crée l'élément
        Student::create($data_validated);

        return to_route('Admin.create-student')->with('success', "L'Étudiant(e) $request->LNameStud $request->FNameStud est enregistré(e) avec succès");
    }


    public function update(FormStudentRequest $request, Student $student){
        $data_validated = $request->validated();
        if($request->hasfile('PhotoStud')){
            if($student->PhotoStud && Storage::disk('public')->exists($student->PhotoStud)){
                Storage::disk('public')->delete($student->PhotoStud);//supprimer le fichier existant
            }

            $data_validated['PhotoStud'] = $request->file('PhotoStud')->store('students', 'public');
        }
        $student->update($data_validated);
        return to_route('Admin.list-student')->with('success', "Les informations de l'Étudiant(e) $student->LNameStud $student->FNameStud ont été modifiés(ées) avec succès");
    }



    public function destroy(Student $student)
    {
        // Supprimer la photo associée si elle existe
        if ($student->PhotoStud && Storage::disk('public')->exists($student->PhotoStud)) {
            Storage::disk('public')->delete($student->PhotoStud);
        }

        // Supprimer l'enregistrement en base de données
        $student->delete();

        return to_route('Admin.list-student')->with(
            'success',
            "L'Étudiant(e) {$student->LNameStud} {$student->FNameStud} a été supprimé(e) avec succès"
        );
    }

}
