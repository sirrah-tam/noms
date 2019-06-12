@extends('layouts.default')

@section('content')
  <section class="page-content container">
    <h1 class="text-center mb-10">Here are your Upcoming Meals</h1>

    <div class="md:w-1/2 mx-auto">
      <ul class="text-center">
        @foreach ($meals as $meal)
          <li class="my-5">
            <a href="/meals/{{ $meal->id }}" class="btn">{{ $meal->name }}</a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="md:w-1/2 mx-auto my-10 text-center">
      <a href="/meals/create" class="btn bg-green-700">Add New Meal</a>
    </div>
  </section>
@endsection