@extends('layouts.default')

@section('content')
  <section class="container mx-auto">
    <div class="md:w-1/2 mx-auto">
      <h1 class="text-center">Here's all your Food Stuff</h1>
  
      <ul class="text-center">
        @foreach ($food as $item)
          <li>
            <a href="/food/{{ $item->id }}" class="text-blue-600 font-semibold hover:underline">{{ $item->name }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </section>
@endsection