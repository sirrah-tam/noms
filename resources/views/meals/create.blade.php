@extends('layouts.default')

@section('content')
  <section class="page-content container">
    <h1 class="text-center">Add new Meal</h1>
    <form method="POST" action="/meals">
      {{-- CSRF token --}}
      @csrf

      {{-- Name Field --}}
      <div class="mb-5">
        <label for="name" >Name</label>
        <input type="text" name="name" id="name" required class="">
      </div>

      {{-- Description Field --}}
      <div class="mb-5">
        <label for="notes" >Notes</label>
        <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
      </div>

      <strong class="block mb-5">This meals needs:</strong>
      <label for="foodStuff" class="sr-only">Food Stuff</label>
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      <input type="text" name="foodStuff[]">
      
      {{-- Submit buttom --}}
      <button type="submit" class="btn bg-blue-800 text-white">Add Meal</button>

      {{-- Errors --}}
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