<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormFormationRequest;
use App\Http\Requests\FormStudentRequest;
use App\Http\Requests\FormTeacherRequest;
use App\Models\Formation;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;
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

    // CRUD réel Formation
    public function indexFormation(): View
    {
        $formations = Formation::orderByDesc('IdFormation')->paginate(9);
        $total_formations = Formation::count();

        return view('Espace Administrateur.Formation et cours.Formation', compact('formations', 'total_formations'));
    }

    public function storeFormation(FormFormationRequest $request)
    {
        Formation::create($request->validated());

        return to_route('Admin.programs')->with('success', "La formation \"{$request->NameFormation}\" a été créée avec succès");
    }

    public function updateFormation(FormFormationRequest $request, Formation $formation)
    {
        $formation->update($request->validated());

        return to_route('Admin.programs')->with('success', "La formation \"{$formation->NameFormation}\" a été modifiée avec succès");
    }

    public function destroyFormation(Formation $formation)
    {
        $name = $formation->NameFormation;
        $formation->delete();

        return to_route('Admin.programs')->with('success', "La formation \"{$name}\" a été supprimée avec succès");
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

    // CRUD réel Teacher
    public function indexTeacher(): View
    {
        $teachers = Teacher::orderByDesc('MatTeacher')->paginate(6);
        $total_teachers = Teacher::count();

        return view('Espace Administrateur.Utilisateurs.Formateur.liste_formateur', compact('teachers', 'total_teachers'));
    }

    public function storeTeacher(FormTeacherRequest $request)
    {
        $data_validated = $request->validated();

        if ($request->hasFile('PhotoTeacher')) {
            $data_validated['PhotoTeacher'] = $request->file('PhotoTeacher')->store('teachers', 'public');
        }

        Teacher::create($data_validated);

        return to_route('Admin.list-teacher')->with('success', "Le formateur {$request->LNameTeacher} {$request->FNameTeacher} a été enregistré avec succès");
    }

    public function updateTeacher(FormTeacherRequest $request, Teacher $teacher)
    {
        $data_validated = $request->validated();

        if ($request->hasFile('PhotoTeacher')) {
            if ($teacher->PhotoTeacher && Storage::disk('public')->exists($teacher->PhotoTeacher)) {
                Storage::disk('public')->delete($teacher->PhotoTeacher);
            }

            $data_validated['PhotoTeacher'] = $request->file('PhotoTeacher')->store('teachers', 'public');
        }

        $teacher->update($data_validated);

        return to_route('Admin.list-teacher')->with('success', "Les informations du formateur {$teacher->LNameTeacher} {$teacher->FNameTeacher} ont été modifiées avec succès");
    }

    public function destroyTeacher(Teacher $teacher)
    {
        if ($teacher->PhotoTeacher && Storage::disk('public')->exists($teacher->PhotoTeacher)) {
            Storage::disk('public')->delete($teacher->PhotoTeacher);
        }

        $teacher->delete();

        return to_route('Admin.list-teacher')->with('success', "Le formateur {$teacher->LNameTeacher} {$teacher->FNameTeacher} a été supprimé avec succès");
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

    // Fonction permettant de lister les différents utilisateurs présent dans la bdd. compact sert à transformer la variable $students en un tableau associatif
    public function index(): View
    {
        $students = Student::orderByDesc('MatStud')->paginate(6);
        $total_students = Student::count();

        return view('Espace Administrateur.Utilisateurs.Participant.liste_participant', compact('students', 'total_students'));

    }

    // créer un étudiant
    public function store(FormStudentRequest $request)
    {

        $data_validated = $request->validated();
        // Après avoir validé les données on vérifie si le champ contient un fichier
        if ($request->hasfile('PhotoStud')) {
            // si c'est le cas on stock le fichier et on récupère son chemin relatif dans la valeur de Photostud
            $data_validated['PhotoStud'] = $request->file('PhotoStud')->store('students', 'public');
        }
        // puis on crée l'élément
        Student::create($data_validated);

        return to_route('Admin.create-student')->with('success', "L'Étudiant(e) $request->LNameStud $request->FNameStud est enregistré(e) avec succès");
    }

    public function update(FormStudentRequest $request, Student $student)
    {
        $data_validated = $request->validated();
        if ($request->hasfile('PhotoStud')) {
            if ($student->PhotoStud && Storage::disk('public')->exists($student->PhotoStud)) {
                Storage::disk('public')->delete($student->PhotoStud); // supprimer le fichier existant
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
