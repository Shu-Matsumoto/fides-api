<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'title',
            'image_path',
            'url',
    ];

    protected $guarded = [
            'id'
    ];

    //女優の情報
    public function actor_users()
    {
        return $this->belongsTo(\App\Models\ActorUser::class);
    }

}
