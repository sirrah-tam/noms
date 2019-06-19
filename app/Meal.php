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

    public function addFood($food) 
    {
        if ($food == '') {
            return;
        }

        $foodItem = \App\FoodItem::firstOrCreate(['name' => $food]);
        $this->food()->attach($foodItem);
    }
}
