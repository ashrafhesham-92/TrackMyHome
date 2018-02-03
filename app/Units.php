<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    protected $table = "item_units";

    public function foodStockItem()
    {
        return $this->hasMany(FoodStock::class, 'unit_id', 'id');
    }
}
