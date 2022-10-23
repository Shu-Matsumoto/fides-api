<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'actor_schedule_id',
        'maker_user_id',
        'status',
        'fee',
        'title',
        'summary',
        'date_time',
        'place',
        'makeup',
        'rental_costume',
        'private_room',
        'shared_room',
        'pick_up',
        'meal',
        'message',
    ];

    protected $guarded = [
        'id'
    ];
    //女優のスケジュール情報取得
    public function actor_schedules()
    {
        return $this->belongsTo(\App\Models\ActorSchedule::class);
    }
    //メーカーユーザー情報取得
    public function maker_users()
    {
        return $this->belongsTo(\App\Models\MakerUser::class);
    }
    //出演依頼に対するレスポンス取得
    public function offer_responses()
    {
        return $this->hasMany(\App\Models\OfferResponse::class);
    }
}
