<?php

namespace App\Http\Controllers;

use App\FoodItem;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $food = FoodItem::all();

        return view('food.index', compact('food'));
    }

    public function create()
    {
        return view('food.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'description' => ''
        ]);
        
        FoodItem::create($validated);

        return redirect('/food');
    }

    public function destroy(FoodItem $foodItem)
    {
        $foodItem->delete();

        return redirect('/food');
    }
}
