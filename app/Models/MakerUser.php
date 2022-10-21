<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakerUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'maker_name',
        'image_path',
        'url',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guarded = [
        'id'
    ];
}
