<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filltable = [
        'name', 'price', 'id_category', 'id_cashier',
    ];
    public function category()
    {
        return $this->BelongsTo(Category::class,'id_category');
    }

    public function cashier()
    {
        return $this->BelongsTo(Cashier::class,'id_cashier');
    }
}
