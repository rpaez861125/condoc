<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "units";

    protected $fillable = ['number'];

    public function grades ()
    {
        return $this->hasMany('App\Grade');
    }
}
