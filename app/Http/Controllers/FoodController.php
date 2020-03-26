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

    public function edit(FoodItem $foodItem)
    {
        return view('food.edit', compact('foodItem'));
    }

    public function show(FoodItem $foodItem)
    {
        return view('food.show', compact('foodItem'));
    }

    public function update(FoodItem $foodItem)
    {
        $validated = request()->validate([
            'name' => 'required',
            'description' => ''
        ]);

        $foodItem->update($validated);

        return view('food.show', compact('foodItem'));
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required'
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
