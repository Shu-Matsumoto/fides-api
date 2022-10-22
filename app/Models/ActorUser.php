<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorUser extends Model
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

    // チャット情報取得
    public function chats()
    {
        return $this->hasMany(\App\Models\Chat::class);
    }

     // 女優のスケジュール情報取得
    public function actor_schedules()
    {
        return $this->hasMany(\App\Models\ActorSchedule::class);
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

    // プレイ条件の情報取得
    public function play_conditions()
    {
        return $this->hasMany(\App\Models\play_condition::class);
    }

    // ポートフォリオの情報取得
    public function portfolio()
    {
        return $this->hasOne(\App\Models\Portfolio::class);
    }

    // システムアカウントの情報取得
    public function system_acounts()
    {
        return $this->belongsTo(\App\Models\System_acount::class);
    }


}
