@extends('main')

@section('title', '| Register')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="form" action="index.html" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="text" name="password" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="password_confirmation">Confirm Password:</label>
              <input type="text" name="password_confirmation" class="form-control" value="">
            </div>
          </form>
        </div>
    </div>

@endsection
