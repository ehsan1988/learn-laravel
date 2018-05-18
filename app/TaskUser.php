<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TaskUser
 *
 * @mixin \Eloquent
 */
class TaskUser extends Model
{
    protected $fillable = [
        'user_id',
        'task_id'
    ];
}
