@extends('layouts.default')

@section('content')

    <div class="container mx-auto p-16 text-center">
        <h1>Noms: A recipe & grocery project</h1>
        <p>What's for dinner?</p>
        <nav class="py-10">
            <ul class="flex justify-center">
                <li class="mx-5"><a href="/meals" class="btn">Meals</a></li>
                <li class="mx-5"><a href="/food" class="btn">Food Stuff</a></li>
            </ul>
        </nav>
    </div>

@endsection