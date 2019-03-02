<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    protected $table = "assists";

    protected $fillable = ['date', 'student_id', 'subject_id'];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
