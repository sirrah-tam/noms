@extends('layouts.default')

@section('content')
  <div class="page-content container">
    <div class="md:w-1/3 mx-auto">
      <h1>{{ $meal->name }}</h1>
      @if ($meal->notes)
      <div class="border p-5 mb-10">
        <strong>Notes:</strong>
        <p>{{ $meal->notes }}</p>
      </div>
      @endif
      @if ($meal->food)
        <ul>
          @foreach ($meal->food as $item)
              <li class="mb-5">
                <a href="/food/{{ $item->id }}" class="btn {{ $item->in_stock ? 'bg-green-700' : 'bg-red-700' }}">{{ $item->name }}</a>
              </li>
          @endforeach
        </ul>
      @endif
      <a href="/meals/{{ $meal->id }}/edit" class="btn my-5">Edit</a>
      <form method="POST" action="/meal/{{ $meal->id }}/delete">
        @csrf
        @method('delete')
        <button type="submit" class="btn bg-red-700">Delete</button>
      </form>
      <a href="/meals" class="block mt-8 text-blue-700 font-semibold">&lt; Back to all</a>
    </div>
  </div>
@endsection