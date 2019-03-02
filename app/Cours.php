<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $table = "caurses";

    protected $fillable = ['start_year', 'end_year'];

    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
