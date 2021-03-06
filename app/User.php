<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Company[] $companies
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Project[] $projects
 * @property-read \App\Role $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Task[] $tasks
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password', 'role-id', 'first_name', 'middle_name', 'last_name', 'city'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function role()
  {
    return $this->belongsTo('App\Role');
  }
//-----------------------------------------------------------

//one to many
  public function companies()
  {
    return $this->hasMany('App\Company');
  }

  //many to many-------------------------------
  public function projects()
  {
    return $this->belongsToMany('App\Project');
  }

  public function tasks()
  {
    return $this->belongsToMany('App\Task');
  }

  //many to many------------------------------


  public function comments()
  {
    return $this->morphMany('App\Comment', 'commentable');
  }

}
