<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotice extends Model
{
    use HasFactory;

    protected $fillable = [
        'actor_user_id',
        'maker_user_id',
        'user_type',
        'title',
        'type',
        'already_read',
        'category',
        'information_id',
        'title',
        'sub_title',
    ];

    protected $guarded = [
        'id'
    ];
}
