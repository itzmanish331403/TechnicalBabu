@extends('layout.admin-panel')

@section('page-content')

<!-- user create form css -->
@include('includes.user-form-css')
<!-- user create form css -->

  <div class="container">
    <h2>User Edit</h2>
    <form action="{{ route('user.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $user->id}}">
      <div class="form-group">
        <label for="name">Edit  Name:</label>
        <input type="text" id="name" value="{{$user->name}}" name="name">
      </div>
      <div class="form-group">
        <label for="email">Edit  Email:</label>
        <input type="email" id="email" name="email"  value="{{$user->email}}">
      </div>

      <div class="form-group">
        <input type="submit" value="Register">
      </div>
    </form>
  
  </div>

  <div class="animation-area">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>


@endsection