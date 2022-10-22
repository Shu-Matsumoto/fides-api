<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationReport extends Model
{
    use HasFactory;

    protected $fillable = [
            'actor_user_id',
            'maker_user_id',
            'sender_dir',
            'breach_contract',
            'withdrawal_negotiation' ,
            'business_interruption',
            'nuisance',
            'other',
            'V' ,
    ];

    protected $guarded = [
            'id'
    ];

    //女優の情報
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
