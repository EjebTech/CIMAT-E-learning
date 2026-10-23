<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('accueil', function () {
//     return view('index');
// });



Route::get('accueil', [AccueilController::class,'index']);
//                                      Administrateur                                  //

//Exercice
Route::get('DashboardAdmin', [AdminController::class, 'DashboardAdmin']);

Route::get('Insert-exercise', [AdminController::class, 'InsertExercise']);

Route::get('Update-exercise', [AdminController::class, 'UpdateExercise']);

Route::get('Insert-correction', [AdminController::class, 'InsertCorrection']);

Route::get('List-exercise', [AdminController::class, 'ListExercise']);

//Formation et cours

Route::get('Courses', [AdminController::class, 'Courses']);

Route::get('Insert-courses', [AdminController::class, 'InsertCourses']);

Route::get('Update-courses', [AdminController::class, 'UpdateCourses']);


Route::get('Programs', [AdminController::class, 'Programs']);

Route::get('Insert-programs', [AdminController::class, 'InsertPrograms']);

Route::get('Update-programs', [AdminController::class, 'UpdatePrograms']);

//Fichiers de cours

Route::get('Courses-file', [AdminController::class, 'CoursesFile']);

Route::get('Insert-Courses-File', [AdminController::class, 'InsertCoursesFile']);

//Groupes

Route::get('Groups', [AdminController::class, 'Groups']);

Route::get('Insert-groups', [AdminController::class, 'InsertGroups']);

Route::get('Update-groups', [AdminController::class, 'UpdateGroups']);

Route::get('Assign-student', [AdminController::class, 'AssignStudents']);


//Utilisateurs

Route::get('Insert-admin', [AdminController::class, 'InsertAdmin']);

Route::get('List-admin', [AdminController::class, 'ListAdmin']);

Route::get('Update-admin', [AdminController::class, 'UpdateAdmin']);

Route::get('Insert-teacher', [AdminController::class, 'InsertTeacher']);

Route::get('List-teacher', [AdminController::class, 'ListTeacher']);

Route::get('Update-teacher', [AdminController::class, 'UpdateTeacher']);

Route::get('Insert-student', [AdminController::class, 'InsertStudent']);

Route::get('List-student', [AdminController::class, 'ListStudent']);

Route::get('Update-student', [AdminController::class, 'UpdateStudent']);


//Visioconférece

Route::get('Videoconference', [AdminController::class, 'VideoConference']);

Route::get('Organize-Videoconference', [AdminController::class, 'InsertVideoConference']);
