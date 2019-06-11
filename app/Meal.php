<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = [];
    protected $attributes = [
        'notes' => ''
    ];

    public function food()
    {
        return $this->belongsToMany(FoodItem::class);
    }

    public function addFood($food) {
        if ($food == '') {
            return;
        }

        $foodItem = \App\FoodItem::where('name', '=', $food);
        
        if ($foodItem->exists()) {
            // Create new entry in Food Item Meal table
            $this->food()->attach($foodItem->first()->id);
        } else {
            // Create new entry in Food Table
            $newFoodItem = new \App\FoodItem;
            $newFoodItem->name = $food;
            $newFoodItem->save();
            // Create new entry in Food Item Meal table
            $this->food()->attach($newFoodItem->id);
        }
    }
}
