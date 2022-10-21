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
