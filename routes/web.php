<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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
Route::get('Admin/Dashboard', [AdminController::class, 'DashboardAdmin']);

Route::get('Admin/Insert-exercise', [AdminController::class, 'InsertExercise']);

Route::get('Admin/Update-exercise', [AdminController::class, 'UpdateExercise']);

Route::get('Admin/Insert-correction', [AdminController::class, 'InsertCorrection']);

Route::get('Admin/List-exercise', [AdminController::class, 'ListExercise']);

//Formation et cours

Route::get('Admin/Courses', [AdminController::class, 'Courses']);

Route::get('Admin/Insert-courses', [AdminController::class, 'InsertCourses']);

Route::get('Admin/Update-courses', [AdminController::class, 'UpdateCourses']);


Route::get('Admin/Programs', [AdminController::class, 'Programs']);

Route::get('Admin/Insert-programs', [AdminController::class, 'InsertPrograms']);

Route::get('Admin/Update-programs', [AdminController::class, 'UpdatePrograms']);

//Fichiers de cours

Route::get('Admin/Courses-file', [AdminController::class, 'CoursesFile']);

Route::get('Admin/Insert-Courses-File', [AdminController::class, 'InsertCoursesFile']);

//Groupes

Route::get('Admin/Groups', [AdminController::class, 'Groups']);

Route::get('Admin/Insert-groups', [AdminController::class, 'InsertGroups']);

Route::get('Admin/Update-groups', [AdminController::class, 'UpdateGroups']);

Route::get('Admin/Assign-student', [AdminController::class, 'AssignStudents']);


//Utilisateurs

Route::get('Admin/Insert-admin', [AdminController::class, 'InsertAdmin']);

Route::get('Admin/List-admin', [AdminController::class, 'ListAdmin']);

Route::get('Update-admin', [AdminController::class, 'UpdateAdmin']);

Route::get('Admin/Insert-teacher', [AdminController::class, 'InsertTeacher']);

Route::get('Admin/List-teacher', [AdminController::class, 'ListTeacher']);

Route::get('Admin/Update-teacher', [AdminController::class, 'UpdateTeacher']);

Route::get('Admin/Insert-student', [AdminController::class, 'InsertStudent']);

Route::get('Admin/List-student', [AdminController::class, 'ListStudent']);

Route::get('Admin/Update-student', [AdminController::class, 'UpdateStudent']);


//Visioconférece

Route::get('Admin/Videoconference', [AdminController::class, 'VideoConference']);

Route::get('Admin/Organize-Videoconference', [AdminController::class, 'InsertVideoConference']);




//                                             **************Apprenant***********************//

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
