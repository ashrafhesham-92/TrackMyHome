<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 2/3/2018
 * Time: 9:52 PM
 */

namespace App\Http\Controllers;


use App\FoodStock;

class FoodStockController
{
    public function index()
    {
        $food_stock_items = FoodStock::paginate(5);
        return view('foodStock.index', ['food_items'=>$food_stock_items]);
    }
}