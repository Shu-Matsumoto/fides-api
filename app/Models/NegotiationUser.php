<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NegotiationUser extends Model
{
    use HasFactory;

    protected $fillable = [
            'actor_user_id',
            'maker_user_id',
            'active',
            'is_deleted',
    ];

    protected $guarded = [
             'id'
    ];
}
