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

   
}
