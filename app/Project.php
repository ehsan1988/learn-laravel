<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Project
 *
 * @property-read \App\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Task[] $tasks
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @mixin \Eloquent
 */
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

  //many to many--------------

  public function comments()
  {
    return $this->morphMany('App\Comment', 'commentable');
  }

}
