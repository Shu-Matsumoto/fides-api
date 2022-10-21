<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
            'actor_user_id',
            'maker_user_id',
            'sender_dir',
            'comment',
            'send_time',
    ];

    protected $guarded = [
            'id'
    ];
}
