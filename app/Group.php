<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups";

    protected $fillable = ['number', 'grade_id'];

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
