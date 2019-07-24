@extends('layouts.default')

@section('content')
  <div class="page-content container">
    <div class="md:w-1/3 mx-auto">
      <h1>{{ $foodItem->name }}</h1>
      <p>{{ $foodItem->description }}</p>
      <a href="/food/{{ $foodItem->id }}/edit" class="btn my-5"><span class="fas fa-edit pr-3" aria-hidden="true"></span>Edit</a>
      <form method="POST" action="/food/{{ $foodItem->id }}">
        @csrf
        @method('delete')
        <button type="submit" class="btn bg-red-700"><span class="fas fa-trash pr-3" aria-hidden="true"></span>Delete</button>
      </form>
      <a href="/food" class="block mt-8 text-blue-700 font-semibold">&lt; Back to all</a>
    </div>
  </div>
@endsection