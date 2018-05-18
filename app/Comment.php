<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Comment
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 */
class Comment extends Model
{
    protected $fillable = [
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
