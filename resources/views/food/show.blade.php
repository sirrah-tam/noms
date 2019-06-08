@extends('layouts.default')

@section('content')
  <div class="container mx-auto">
    <div class="md:w-1/3 mx-auto">
      <h1>{{ $foodItem->name }}</h1>
      <p>{{ $foodItem->description }}</p>
      <a href="/food/{{ $foodItem->id }}/edit" class="inline-block text-white bg-blue-700 py-2 px-4 my-5">Edit</a>
      <a href="/food" class="block mt-8 text-blue-700 font-semibold">&lt; Back to all</a>
    </div>
  </div>
@endsection