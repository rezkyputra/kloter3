<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    public function Product()
    {
        return $this->hasOne(Product::class,'id');
    }
}
