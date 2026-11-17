<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;
    //la variable $primaryKey sert à désigner une colonne comme un identifiant en autoincrement (uniquement si l'on a spécifié dans la migration)
    protected $primaryKey = 'MatStud';

    //La variable $fillable permet de définir les champs qui sont remplissables par la methode 'create'. NB: Pour faire l'effet inverse utiliser la variable $guarded
    protected $fillable = [
        'LNameStud',
        'FNameStud',
        'EmailStud',
        'PasswordStud',
        'PhoneStud',
        'PhotoStud',
        'StatusStud'
    ];


    public static function storeStudents(){
        Student::create([
        'LNameStud'    => 'Koné',
        'FNameStud'    => 'Aicha',
        'EmailStud'    => 'aicha.kone@gmail.com',
            'PasswordStud' => uniqid('kn'),
        ]);


        Student::create([
            'LNameStud'    => 'Traoré',
            'FNameStud'    => 'Ibrahim',
            'EmailStud'    => 'ibrahim.traore@gmail.com',
            'PasswordStud' => uniqid('tr'),
        ]);



        Student::create([
            'LNameStud'    => 'Diallo',
            'FNameStud'    => 'Fatou',
            'EmailStud'    => 'fatou.diallo@gmail.com',
            'PasswordStud' => uniqid('dl'),
        ]);

        return 'Les 3 étudiants ont été créés avec succès !';
    }

    public static function deleteStudent(){
        $student = Student::where('MatStud', 6)->delete();

        return $student;
    }

}
