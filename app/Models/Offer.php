<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
            'sender_id',
            'receiver_id',
            'status',
    ];

    protected $guarded = [
            'id'
    ];
}
