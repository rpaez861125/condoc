<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";

    protected $fillable = ['graduated', 'no_registration', 'ci', 'name', 'last_name', 'size',
                         'weight', 'age', 'sex', 'skin_color', 'hair_color', 'eye_color',
                         'social_origin_father', 'social_origin_mother', 'address', 'attention_area',
                         'internal', 'low', 'group_id', 'cours_id', 'popularcouncil_id'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function cours()
    {
        return $this->belongsTo('App\Cours');
    }

    public function popularcouncil()
    {
        return $this->belongsTo('App\Popularcouncil');
    }

    public function student_subject()
    {
        return $this->hasMany('App\Student_Subject'); 
    }

    public function assist()
    {
        return $this->hasMany('App\Assist');
    }
}
