@extends('layouts.default')

@section('content')
<div class="page-content container text-center">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          You are logged in!

          <passport-clients></passport-clients>
          <passport-authorized-clients></passport-authorized-clients>
          <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection