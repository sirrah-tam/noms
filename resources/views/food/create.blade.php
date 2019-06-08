@extends('layouts.default')

@section('content')
  <section class="container mx-auto">
    <h1 class="text-center">Add new food stuffs</h1>
    <form method="POST" action="/food" class="w-full max-w-xs mx-auto">
      {{ csrf_field() }}
      <div class="mb-5">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
        <input type="text" name="name" id="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-5">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
      </div>
      <button type="submit" class="p-2 bg-blue-800 text-white">Add Food Stuff</button>

      @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-5 rounded relative">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </form>
  </section>
@endsection