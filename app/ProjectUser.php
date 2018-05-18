<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProjectUser
 *
 * @mixin \Eloquent
 */
class ProjectUser extends Model
{
    protected $fillable = [
        'user_id',
        'project_id'
    ];

}
