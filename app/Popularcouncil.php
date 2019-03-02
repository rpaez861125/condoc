<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popularcouncil extends Model
{
    protected $table = "popularcouncils";

    protected $fillable = ['name', 'municipality_id'];

    public function municipality()
    {
        return $this->belongsTo('App\Municipality');
    }  

    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
