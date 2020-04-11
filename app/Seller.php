<?php

namespace App;

use App\Transaction;

class Seller extends User
{
    public function products(){
        return $this->hasMany( Transaction::class );
    }
}
