@extends('layouts.default')

@section('body-class', 'home')

@section('content')

    <div class="page-content container text-center">
        <h1>Noms: A recipe & grocery project</h1>
        <p class="text-xl">What's for dinner?</p>
        <nav class="py-10">
            <ul class="flex justify-center">
                <li class="mx-5">
                    <a href="/meals" class="btn"><span class="fas fa-utensils pr-3" aria-hidden="true"></span>Meals</a>
                </li>
                <li class="mx-5">
                    <a href="/food" class="btn"><span class="fas fa-list-ul pr-3" aria-hidden="true"></span>Pantry</a>
                </li>
            </ul>
        </nav>
    </div>

@endsection