<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 2/3/2018
 * Time: 9:52 PM
 */

namespace App\Http\Controllers;


use App\FoodStock;
use App\Http\Requests\SaveFoodStockItem;
use Illuminate\Database\QueryException;

class FoodStockController
{
    public function index()
    {
        $food_stock_items = FoodStock::paginate(5);
        return view('foodStock.index', ['food_items'=>$food_stock_items]);
    }

    public function saveItem(SaveFoodStockItem $request)
    {
        try
        {
            $item = new FoodStock();

            $item->name               = json_encode(['en'=>$request->item_name, 'ar'=>'']);
            $item->description        = json_encode(['en'=>$request->description, 'ar'=>'']);
            $item->item_type_id       = $request->item_type;
            $item->current_amount     = $request->current_amount;
            $item->unit_id            = $request->unit;
            $item->favorite_seller_id = $request->fav_seller;

            $item->save();

            return redirect()->route('food_stock');
        }
        catch(QueryException $qe)
        {
            return redirect()->back()->withErrors(['Query Exception: ' => $qe->getMessage()])->withInput();
        }
        catch(\Throwable $fe)
        {
            return redirect()->back()->withErrors(['Fatal Exception: ' => $fe->getMessage()])->withInput();
        }
        catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['General Exception: ' => $e->getMessage()])->withInput();
        }
    }
}