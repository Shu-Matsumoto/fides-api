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

    // チャット情報取得
    public function chats()
    {
        return $this->hasMany(\App\Models\Chat::class);
    }

    // オファー情報取得
    public function offers()
    {
        return $this->hasMany(\App\Models\Offer::class);
    }

    // 評価情報取得
    public function evaluations()
    {
        return $this->hasMany(\App\Models\Evaluation::class);
    }

    // 違反通報の情報取得
    public function violation_reports()
    {
        return $this->hasMany(\App\Models\ViolationReport::class);
    }

    // 女優のスケジュール情報取得
    public function actor_schedules()
    {
        return $this->hasMany(\App\Models\ActorSchedule::class);
    }

    // システムアカウントの情報取得
    public function system_acounts()
    {
        return $this->belongsTo(\App\Models\System_acount::class);
    }
}
