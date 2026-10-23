<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('accueil', function () {
//     return view('index');
// });



Route::get('accueil', [AccueilController::class,'index']);
//                                             **************Administrateur***********************//

//Exercice
Route::get('DashboardAdmin', [AdminController::class, 'DashboardAdmin']);

Route::get('Admin-Insert-exercise', [AdminController::class, 'InsertExercise']);

Route::get('Admin-Update-exercise', [AdminController::class, 'UpdateExercise']);

Route::get('Admin-Insert-correction', [AdminController::class, 'InsertCorrection']);

Route::get('Admin-List-exercise', [AdminController::class, 'ListExercise']);

//Formation et cours

Route::get('Admin-Courses', [AdminController::class, 'Courses']);

Route::get('Admin-Insert-courses', [AdminController::class, 'InsertCourses']);

Route::get('Admin-Update-courses', [AdminController::class, 'UpdateCourses']);


Route::get('Admin-Programs', [AdminController::class, 'Programs']);

Route::get('Admin-Insert-programs', [AdminController::class, 'InsertPrograms']);

Route::get('Admin-Update-programs', [AdminController::class, 'UpdatePrograms']);

//Fichiers de cours

Route::get('Admin-Courses-file', [AdminController::class, 'CoursesFile']);

Route::get('Admin-Insert-Courses-File', [AdminController::class, 'InsertCoursesFile']);

//Groupes

Route::get('Admin-Groups', [AdminController::class, 'Groups']);

Route::get('Admin-Insert-groups', [AdminController::class, 'InsertGroups']);

Route::get('Admin-Update-groups', [AdminController::class, 'UpdateGroups']);

Route::get('Admin-Assign-student', [AdminController::class, 'AssignStudents']);


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




//                                             **************Apprenant***********************//

//Cours
Route::get('Student-Courses', [StudentController::class, 'Courses']);

Route::get('Student-Courses_file', [StudentController::class, 'CoursesFile']);

//Evaluation
Route::get('Student-Exercise', [StudentController::class, 'Exercises']);

Route::get('Student-Corrections', [StudentController::class, 'Corrections']);

//Formateur
Route::get('Student-List_Teachers', [StudentController::class, 'Teachers']);

//Visioconférence
Route::get('Student-Videoconference', [StudentController::class, 'Videoconference']);

