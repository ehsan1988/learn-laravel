<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'company_id',
        'day'
    ];



    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
    //many to many--------------
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
