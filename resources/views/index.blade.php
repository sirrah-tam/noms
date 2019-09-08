@extends('layouts.default')

@section('body-class', 'home')

@section('content')

<div class="page-content container text-center flex flex-col justify-center items-center">
    <h1>Noms: A recipe & grocery project</h1>
    <p class="text-xl">What's for dinner?</p>
    <nav class="py-10">
        <ul class="flex justify-center my-5">
            <!-- Authentication Links -->
            @guest
            <li class="mx-5">
                <a class="btn" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="mx-5">
                <a class="btn" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="mx-5">
                <a href="/meals" class="btn"><span class="fas fa-utensils pr-3" aria-hidden="true"></span>Meals</a>
            </li>
            <li class="mx-5">
                <a href="/food" class="btn"><span class="fas fa-list-ul pr-3" aria-hidden="true"></span>Pantry</a>
            </li>
            <li class="mx-5">
                <a class="btn" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </nav>
</div>

@endsection