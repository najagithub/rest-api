<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacion extends Model
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id'
    ];

    public function buyer()
    {
        return $this->belongsTo('App\Buyer');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
