<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'LNameTeacher',
        'FNameTeacher',
        'EmailTeacher',
        'PasswordTeacher',
        'PhoneTeacher',
        'PhotoTeacher',
        'StatusTeacher',
        'SpecTeacher'
    ];

    protected $primaryKey = 'MatTeacher';

    public static function storeTeachers(){

        Teacher::create([
            'LNameTeacher'=> 'Kouassi',
            'FNameTeacher'=> 'Jean-Marc',
            'EmailTeacher'=> 'jeanmarc.kouassi@gmail.com',
            'PasswordTeacher'=> uniqid('jmk'),
            'SpecTeacher' => 'Mathématiques',
            'PhoneTeacher'=> '0701020304',
        ]);


        Teacher::create([
            'LNameTeacher'=> 'Diabaté',
            'FNameTeacher'=> 'Mariam',
            'EmailTeacher'=> 'mariam.diabate@gmail.com',
            'PasswordTeacher'=> uniqid('mdb'),
            'SpecTeacher' => 'Physique-Chimie',
            'PhoneTeacher'=> '0506070809',
        ]);


        Teacher::create([
            'LNameTeacher'=> 'Yao',
            'FNameTeacher'=> 'Armand',
            'EmailTeacher'=> 'armand.yao@gmail.com',
            'PasswordTeacher'=> uniqid('ay'),
            'SpecTeacher' => 'Informatique',
            'PhoneTeacher'=> '0102030405',
        ]);


        Teacher::create([
            'LNameTeacher'=> 'Bamba',
            'FNameTeacher'=> 'Awa',
            'EmailTeacher'=> 'awa.bamba@gmail.com',
            'PasswordTeacher'=> uniqid('ab'),
            'SpecTeacher' => 'Français',
            'PhoneTeacher'=> '0745678910',
        ]);

        return 'Les 4 professeurs ont été créés avec succès !';
    }

    public static function deleteTeacher(){
        $teacher = Teacher::where('MatTeacher', 2)->delete();

        return $teacher;
    }
}
