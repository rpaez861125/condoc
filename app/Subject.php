<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects";

    protected $fillable = ['turn_amount', 'grade', 'name'];

    public function student_subject()
    {
        return $this->belongsToMany('App\Student', 'students_subjects')
                    ->withPivot('note', 'tipe'); 
    }

    public function assist()
    {
        return $this->belongsToMany('App\Student', 'assists')
                    ->withPivot('date');
    }
}
