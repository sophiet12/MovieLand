<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'mov_title', 'category_id',
    ];

    public function actors()
    {
        return $this->belongsToMany('App\Actor')->withPivot('role', 'id');
    }

    public function actor($id)
    {
        return $this->belongsToMany('App\Actor')
            ->where("actors.id", $id)
            ->withPivot('role')
            ->first();
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
