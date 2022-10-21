<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class play_condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'honban',
        'gomunashi',
        'nakadashi',
        'ferachio',
        'iramachio',
        'kounaihassha',
        'gansha',
        'gokkun',
        'bukkake',
        'anal',
        'anal_finger',
        'anal_toy',
        'anal_dankon',
        'toys',
        'rotar',
        'denma',
        'vibe',
        'machine_vibe',
        'chizyo',
        'roshutsu',
        'gaihakuroke',
        'gaikokujin',
        'les_tachi',
        'les_neko',
        'multiplay',
        'onani',
        'teimou',
        'hounyou',
        'innyou',
        'yokunyou',
        'giji_innyou',
        'rape',
        'rape_head',
        'sm',
        'spamking',
        'bara_muchi',
        'ippon_muchi',
        'rousoku',
        'kinbaku',
        'hanahukku',
        'kanchou',
        'binta',
        'kubisime',
        'fist',
        'dance',
    ];

    protected $guarded = [
        'id'
    ];

    //女優のid
    public function actor_users()
    {
        return $this->belongsTo(\App\Models\ActorUser::class);
    }

}
