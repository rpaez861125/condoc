<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects";

    protected $fillable = ['turn_amount', 'grade', 'name'];

    public function student_subject()
    {
        return $this->hasMany('App\Student_Subject');
    }

    public function assist()
    {
        return $this->hasMany('App\Assist');
    }
}
