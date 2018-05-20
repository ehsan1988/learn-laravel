<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Company
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Project[] $projects
 * @property-read \App\User $user
 * @mixin \Eloquent
 */
class Company extends Model
{
  protected $fillable = [
    'name',
    'description',
    'user_id'

  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function projects()
  {
    return $this->hasMany('App\Project');
  }

  public function comments()
  {
    return $this->morphMany('App\Comment', 'commentable');
  }
}
