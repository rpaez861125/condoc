<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = "municipalities";

    protected $fillable = ['name'];

    public function popularcouncil()
    {
        return $this->hasMany('App\Popularcouncil');
    }
}
