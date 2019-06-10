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
}
