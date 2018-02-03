<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodStock extends Model
{
    protected $table = "food_stock_items";

    public function type()
    {
        return $this->belongsTo(ItemTypes::class, 'item_type_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Units::class, 'unit_id', 'id');
    }

    public function favoriteSeller()
    {
        return $this->belongsTo(Sellers::class, 'favorite_seller_id', 'id');
    }
}
