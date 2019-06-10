<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $table = "food";
    protected $guarded = [];
    protected $attributes = [
        'description' => '',
        'in_stock' => false
    ];

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }

    public function addFoodItem($food) {
        $foodItem = \App\FoodItem::where('name', '=', $food);

        if ($foodItem->exists()) {
            // Create new entry in Food Item Meal table
        } else {
            // Create new entry in Food Table
            // Create new entry in Food Item Meal table
        }
    }
}
