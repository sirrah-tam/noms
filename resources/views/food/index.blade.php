@extends('layouts.default')

@section('content')
  <section class="page-content container">
    <h1 class="text-center mb-10">Here's all your Food Stuff</h1>

    <div class="md:w-1/2 mx-auto">
      <ul class="text-center">
        @foreach ($food as $item)
          <li class="my-5">
            <a href="/food/{{ $item->id }}" class="btn">{{ $item->name }}</a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="md:w-1/2 mx-auto my-10 text-center">
      <a href="/food/create" class="btn bg-green-700"><span class="fas fa-plus pr-3" aria-hidden="true"></span>Add</a>
    </div>
  </section>
@endsection