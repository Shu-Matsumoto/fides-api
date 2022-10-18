<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//テストです
class user extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'user_name',
        'real_name',
        'image_path',
        'birthday',
        'blood_type',
        'height',
        'weight',
        'clothes_size',
        'shoes_size',
        'breast_size',
        'breast_top_size',
        'breast_under_size',
        'waist_size',
        'hip_size',
        'open',
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
