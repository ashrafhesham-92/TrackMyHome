<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemTypes extends Model
{
    protected $table = "item_types";

    public function foodStockItem()
    {
        return $this->hasMany(FoodStock::class, 'item_type_id', 'id');
    }
}
