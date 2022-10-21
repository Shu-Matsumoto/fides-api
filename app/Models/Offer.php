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

    public function actor_users()
    {
        return $this->belongsTo(\App\Models\ActorUser::class);
    }
    //メーカーユーザー情報取得
    public function maker_users()
    {
        return $this->belongsTo(\App\Models\MakerUser::class);
    }
}

