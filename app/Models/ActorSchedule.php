<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorSchedule extends Model
{
    use HasFactory;
    protected $fillable = [
            'actor_user_id',
            'maker_user_id',
            'start_time',
            'end_time',
            'recruiting',
    ];

    protected $guarded = [
            'id'
    ];
    //女優の情報取得
     public function actor_users()
    {
        return $this->belongsTo(\App\Models\ActorUser::class);
    }
    //メーカーユーザー情報取得
    public function maker_users()
    {
        return $this->belongsTo(\App\Models\MakerUser::class);
    }
    //出演依頼の情報取得
    public function offers()
    {
        return $this->hasMany(\App\Models\Offer::class);
    }

}
