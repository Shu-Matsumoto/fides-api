<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferResponse extends Model
{
    use HasFactory;

    protected $fillable = [
            'offer_id' ,
            'response' ,
            'message' ,
    ];

    protected $guarded = [
            'id'
    ];
    //出演依頼の情報取得
    public function offers()
    {
        return $this->belongsTo(\App\Models\Offer::class);
    }
    
}
