<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = "grades";

    protected $fillable = ['number', 'unit_id'];

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }

    public function group()
    {
        return $this->hasMany('App\Group');
    }
}
