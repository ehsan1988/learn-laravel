<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @property-read \App\Company $company
 * @property-read \App\Project $project
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @mixin \Eloquent
 */
class Task extends Model
{
  protected $fillable = [
    'name',
    'days',
    'hours',
    'project_id',
    'company_id',
    'user_id',
  ];

  //one to many-------------------------------------------

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function project()
  {
    return $this->belongsTo('App\Project');
  }

  public function company()
  {
    return $this->belongsTo('App\Company');
  }
  //one to many-------------------------------------------------


  //many to many--------------
  public function users()
  {
    return $this->belongsToMany('App\User');
  }

  //many to many--------------

  public function comments()
  {
    return $this->morphMany('App\Comment', 'commentable');
  }
}
