<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'act_fname', 'act_lname',
    ];

    public function movies()
    {
        return $this->belongsToMany('App\Movie')->withPivot('role');
    }

}
