<?php

namespace App;

class Buyer extends User
{
    public function transations()
    {
        return $this->hasMany('App\Transaction', 'buyer_id');
    }
}
