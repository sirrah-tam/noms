<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::where('owner_id', auth()->id())->get();

        return view('meals.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $meal = new Meal;

        $meal->owner_id = auth()->id();
        $meal->name = request('name');
        $meal->notes = request('notes') ? request('notes') : '';

        $meal->save();

        $foodStuffs = request('foodStuff');

        foreach ($foodStuffs as $food) {
            $meal->addFood($food);
        }

        return redirect('/meals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return view('meals.show', compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        return view('meals.edit', compact('meal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $validated = request()->validate([
            'name' => 'required',
            'notes' => ''
        ]);

        $meal->update($validated);

        return view('meals.show', compact('meal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();

        return redirect('/meals');
    }
}
