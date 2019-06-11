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
}
