<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System_acount extends Model
{
    use HasFactory;

    protected $fillable = [
        'login_id',
        'password',
        'type',
        'is_admin',
        'is_deleted',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guarded = [
        'id'
    ];
}
