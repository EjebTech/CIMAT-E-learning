<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;




// Authentification
Route::get('/', [LoginController::class,'Connexion'])->name('Connexion');

Route::get('Inscription', [LoginController::class,'Inscription'])->name('Inscription');


//**************Administrateur***********************//

//Exercice
Route::prefix('Admin')->name('Admin.')->group(function (){

    Route::get('/', [AdminController::class, 'DashboardAdmin'])->name('dashboard');

    Route::get('/Insert-exercise', [AdminController::class, 'InsertExercise'])->name('insert-exercise');

    Route::get('/Update-exercise', [AdminController::class, 'UpdateExercise'])->name('update-exercise');

    Route::get('/Insert-correction', [AdminController::class, 'InsertCorrection'])->name('insert-correction');

    Route::get('/List-exercise', [AdminController::class, 'ListExercise'])->name('list-exercise');

    Route::get('/List-correction', [AdminController::class, 'ListCorrection'])->name('list-correction');

    //Formation et cours

    Route::get('/Courses', [AdminController::class, 'Courses'])->name('courses');

    Route::get('/Insert-courses', [AdminController::class, 'InsertCourses'])->name('insert-courses');

    Route::get('/Update-courses', [AdminController::class, 'UpdateCourses'])->name('update-courses');


    Route::get('/Programs', [AdminController::class, 'Programs'])->name('programs');

    Route::get('/Insert-programs', [AdminController::class, 'InsertPrograms'])->name('insert-programs');

    Route::get('/Update-programs', [AdminController::class, 'UpdatePrograms'])->name('update-programs');

    //Fichiers de cours

    Route::get('/Courses-file', [AdminController::class, 'CoursesFile'])->name('courses-file');

    Route::get('/Insert-Courses-File', [AdminController::class, 'InsertCoursesFile'])->name('insert-couses-file');

    //Groupes

    Route::get('/Groups', [AdminController::class, 'Groups'])->name('groups');

    Route::get('/Insert-groups', [AdminController::class, 'InsertGroups'])->name('insert-groups');

    Route::get('/Update-groups', [AdminController::class, 'UpdateGroups'])->name('update-groups');

    Route::get('/Assign-student', [AdminController::class, 'AssignStudents'])->name('assign-student');


    //Utilisateurs

    Route::get('/Insert-admin', [AdminController::class, 'InsertAdmin'])->name('insert-admin');

    Route::get('/List-admin', [AdminController::class, 'ListAdmin'])->name('list-admin');

    Route::get('/Update-admin', [AdminController::class, 'UpdateAdmin'])->name('update-admin');

    Route::get('/Insert-teacher', [AdminController::class, 'InsertTeacher'])->name('insert-teacher');

    Route::get('/List-teacher', [AdminController::class, 'ListTeacher'])->name('list-teacher');

    Route::get('/Update-teacher', [AdminController::class, 'UpdateTeacher'])->name('update-teacher');

    Route::get('/Insert-student', [AdminController::class, 'InsertStudent'])->name('insert-student');

    Route::get('/List-student', [AdminController::class, 'ListStudent'])->name('list-student');

    Route::get('/Update-student', [AdminController::class, 'UpdateStudent'])->name('update-student');


    //Visioconférece

    Route::get('/Videoconference', [AdminController::class, 'VideoConference'])->name('videoconference');

    Route::get('/Organize-Videoconference', [AdminController::class, 'InsertVideoConference'])->name('organize-videoconference');

});


//      **************Apprenant***********************//

//Cours
Route::prefix('Student')->name('Student.')->group(function(){
    Route::get('/', [StudentController::class, 'Dashboard'])->name('dashboard');

    Route::get('/Programs&Courses', [StudentController::class, 'Courses'])->name('programs&courses');

    Route::get('/Courses-file', [StudentController::class, 'CoursesFile'])->name('courses-file');

    //Evaluation
    Route::get('/Homework&Corrections', [StudentController::class, 'Homeworks'])->name('homework&correction');

    Route::get('/Corrections', [StudentController::class, 'Corrections'])->name('corrections');

    //Formateur
    Route::get('/List-Teachers', [StudentController::class, 'Teachers'])->name('teachers');

    //Visioconférence
    Route::get('/Videoconference', [StudentController::class, 'Videoconference'])->name('videoconference');

    //Résultats
    Route::get('/Results', [StudentController::class, 'Results'])->name('results');

    //Annonces et événements
    Route::get('/Announcements', [StudentController::class, 'Announcements'])->name('announcements');

    //Profil
    Route::get('/Profile', [StudentController::class, 'Profile'])->name('profile');
    Route::put('/Profile', [StudentController::class, 'UpdateProfile'])->name('profile.update');
});




//                                             **************Formateur***********************//

//Evaluation
Route::prefix('Teacher')->name('Teacher.')->group(function(){
    Route::get('/', [TeacherController::class, 'DashboardTeacher'])->name('dashboard');

    //Evaluation
    Route::get('/Devoirs-et-evaluations', [TeacherController::class, 'ListExercise'])->name('evaluations');
    Route::get('/Devoirs-et-evaluations/Ajouter', [TeacherController::class, 'InsertExercise'])->name('evaluations.create');
    Route::get('/Corrections', [TeacherController::class, 'ListCorrection'])->name('corrections');
    Route::get('/Insert-correction', [TeacherController::class, 'InsertCorrection'])->name('insert-correction');

    //Formation et cours
    Route::get('/Cours-et-ressources', [TeacherController::class, 'Courses'])->name('resources');
    Route::get('/Cours-et-ressources/Ajouter', [TeacherController::class, 'InsertCourses'])->name('resources.create');
    Route::get('/Formations', [TeacherController::class, 'Programs'])->name('programs');
    Route::get('/Cours-et-ressources/Fichiers', [TeacherController::class, 'CoursesFIle'])->name('resources.files');
    Route::get('/Cours-et-ressources/Fichiers/Ajouter', [TeacherController::class, 'InsertCoursesFile'])->name('resources.files.create');
    Route::get('/Cours-et-ressources/Videos', [TeacherController::class, 'Video'])->name('resources.videos');
    Route::get('/Cours-et-ressources/Videos/Ajouter', [TeacherController::class, 'InsertVideo'])->name('resources.videos.create');

    //Groupe
    Route::get('/Mes-groupes', [TeacherController::class, 'Groups'])->name('groups');

    //Visioconférence
    Route::get('/Visioconferences', [TeacherController::class, 'Videoconference'])->name('videoconference');
    Route::get('/Visioconferences/Ajouter', [TeacherController::class, 'InsertVideoconference'])->name('videoconference.create');

    //profil

    Route::get('/Profil', [TeacherController::class, 'Profil'])->name('profil');
});
