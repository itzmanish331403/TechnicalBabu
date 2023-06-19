@extends('layout.admin-panel')

@section('page-content')

<!-- user create form css -->
@include('includes.user-form-css')
<!-- user create form css -->

  <div class="container">
    <h2>User Registration</h2>
    <form action="{{ route('user.store')}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password">
      </div>
      <!-- <div class="form-group">
      <label>Image:</label>
                      <input type="file" name="image" class="form-control">
                    </div>
      </div> -->
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