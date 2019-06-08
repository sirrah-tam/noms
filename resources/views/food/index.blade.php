@extends('layouts.default')

@section('content')
  <section class="container mx-auto">
    <h1 class="text-center">Here's all your Food Stuff</h1>

    <ul>
      @foreach ($food as $item)
        <li>{{ $item->name }}</li>
      @endforeach
    </ul>
  </section>
@endsection