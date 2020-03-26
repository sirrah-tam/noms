<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $table = "food";
    protected $guarded = [];
    protected $attributes = [
        'description' => ''
    ];

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }
}
