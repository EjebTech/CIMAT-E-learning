<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;





Route::get('/', [LoginController::class,'Connexion'])->name('Connexion');

Route::get('Inscription', [LoginController::class,'Inscription'])->name('Inscription');
//                                             **************Administrateur***********************//

//Exercice
Route::prefix('Admin')->name('Admin.')->group(function (){

    Route::get('/Dashboard', [AdminController::class, 'DashboardAdmin'])->name('dashboard');

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
Route::get('Student/Courses', [StudentController::class, 'Courses']);

Route::get('Student/Courses-file', [StudentController::class, 'CoursesFile']);

//Evaluation
Route::get('Student/Exercise', [StudentController::class, 'Exercises']);

Route::get('Student/Corrections', [StudentController::class, 'Corrections']);

//Formateur
Route::get('Student/List-Teachers', [StudentController::class, 'Teachers']);

//Visioconférence
Route::get('Student/Videoconference', [StudentController::class, 'Videoconference']);



//                                             **************Formateur***********************//

//Evaluation
Route::get('Teacher/Dashboard', [TeacherController::class, 'DashboardTeacher']);

Route::get('Teacher/Insert-correction', [TeacherController::class, 'ListCorrection']);

Route::get('Teacher/Insert-exercise', [TeacherController::class, 'InsertExercise']);

//Evaluation
Route::get('Teacher/Exercise', [TeacherController::class, 'ListExercise']);

Route::get('Teacher/Corrections', [TeacherController::class, 'ListCorrection']);



//Formation et cours

Route::get('Teacher/Courses', [TeacherController::class, 'Courses']);

Route::get('Teacher/Insert-courses', [TeacherController::class, 'InsertCourses']);

Route::get('Teacher/Programs', [TeacherController::class, 'Programs']);

Route::get('Teacher/Course-file', [TeacherController::class, 'CoursesFIle']);

Route::get('Teacher/Insert-Courses-File', [TeacherController::class, 'InsertCoursesFile']);

Route::get('Teacher/Video', [TeacherController::class, 'Video']);

Route::get('Teacher/Insert-Video', [TeacherController::class, 'InsertVideo']);



//Groupe

Route::get('Teacher/Groups', [TeacherController::class, 'Groups']);


//Visioconférence

Route::get('Teacher/Videoconference', [TeacherController::class, 'Videoconference']);

Route::get('Teacher/Insert-Videoconference', [TeacherController::class, 'InsertVideoconference']);
