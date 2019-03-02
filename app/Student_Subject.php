<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student_Subject extends Model
{
    protected $table = "students_subjects";

    protected $fillable = ['note', 'tipe', 'student_id', 'subject_id'];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
