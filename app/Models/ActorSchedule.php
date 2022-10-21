<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorSchedule extends Model
{
    use HasFactory;
    protected $fillable = [
            'login_id',
            'password', // password
            'type',
            'is_admin',
            'is_deleted',
    ];

    protected $guarded = [
            'id'
    ];
}
