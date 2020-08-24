<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message_id', 'content', 'status', 'reaction_user_id',
    ];

    protected $primaryKey = 'message_id';

}
