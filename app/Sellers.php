<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    protected $table = "sellers";

    public function foodStockItem()
    {
        return $this->hasMany(FoodStock::class, 'favorite_seller_id', 'id');
    }
}
