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
    Route::get('/', [StudentController::class, 'Courses'])->name('courses');

    Route::get('/Courses-file', [StudentController::class, 'CoursesFile'])->name('courses-file');

    //Evaluation
    Route::get('/Exercise', [StudentController::class, 'Exercises'])->name('exercise');

    Route::get('/Corrections', [StudentController::class, 'Corrections'])->name('corrections');

    //Formateur
    Route::get('/List-Teachers', [StudentController::class, 'Teachers'])->name('teachers');

    //Visioconférence
    Route::get('/Videoconference', [StudentController::class, 'Videoconference'])->name('videoconference');
});




//                                             **************Formateur***********************//

//Evaluation
Route::prefix('Teacher')->name('Teacher.')->group(function(){
    Route::get('/', [TeacherController::class, 'DashboardTeacher'])->name('dashboard');

    Route::get('/Insert-correction', [TeacherController::class, 'ListCorrection'])->name('list-correction');

    Route::get('/Insert-exercise', [TeacherController::class, 'InsertExercise'])->name('insert-exercise');

    //Evaluation
    Route::get('/Exercise', [TeacherController::class, 'ListExercise'])->name('exercise');

    Route::get('/Corrections', [TeacherController::class, 'ListCorrection'])->name('corrections');

    Route::get('/Insert-correction', [TeacherController::class, 'InsertCorrection'])->name('insert-correction');



    //Formation et cours

    Route::get('/Courses', [TeacherController::class, 'Courses'])->name('courses');

    Route::get('/Insert-courses', [TeacherController::class, 'InsertCourses'])->name('insert-courses');

    Route::get('/Programs', [TeacherController::class, 'Programs'])->name('programs');

    Route::get('/Course-file', [TeacherController::class, 'CoursesFIle'])->name('course-file');

    Route::get('/Insert-Courses-File', [TeacherController::class, 'InsertCoursesFile'])->name('insert-course-file');

    Route::get('/Video', [TeacherController::class, 'Video'])->name('video');

    Route::get('/Insert-Video', [TeacherController::class, 'InsertVideo'])->name('insert-video');



    //Groupe

    Route::get('/Groups', [TeacherController::class, 'Groups'])->name('groups');


    //Visioconférence

    Route::get('/Videoconference', [TeacherController::class, 'Videoconference'])->name('videoconference');

    Route::get('/Insert-Videoconference', [TeacherController::class, 'InsertVideoconference'])->name('insert-videoconference');

});
