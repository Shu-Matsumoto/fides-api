<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor_profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'actress_name',
        'real_name',
        'birthday',
        'blood_type',
        'height',
        'weight',
        'clothes_size',
        'shoes_size',
        'breast_size',
        'breast_top',
        'breast_under',
        'waist_size',
        'hip_size',
    ];

    protected $guarded = [
        'id'
    ];
}
