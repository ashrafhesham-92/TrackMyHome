<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodStockItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_stock_items', function (Blueprint $table) {
            $table->increments('id');
            $table->json('name');
            $table->json('description')->nullable();
            $table->integer('item_type_id');
            $table->decimal('current_amount', 5, 2);
            $table->integer('unit_id')->comment('holds the related unit id');
            $table->integer('favorite_seller_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_stock_items');
    }
}
