@extends('front.layouts.master')
@section('content')
<div class="container">


    <div class="row">

        <div class="col-md-12" id="register">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
              </ul>
            </div>
            @endif
            @if(session()->has('msg'))

            <div class="alert alert-success" >
                <strong>{{ session()->get('msg') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true"> &times;</span>
                </button>
            </div>
             @endif
            <div class="card col-md-8">

                <div class="card-body">
                    <h2 class="card-title">Sign Up</h2>
                    <hr>
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" placeholder="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="Email" name="email" placeholder="Email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="Password" name="password" placeholder="Password" id="password" class="form-control">
                            <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ''}}</span>

                        </div>
                        <div class="form-group">
                            <label for="password_confirmation"> Confirm Password:</label>
                            <input type="Password" name="password_confirmation" placeholder="Confirm password" id="password_confirmation" class="form-control">
                            <span class="text-danger">{{$errors->has('password_confirmation') ? $errors->first('password_confirmation') : ''}}</span>

                        </div>



                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" placeholder="Address" id="address" class="form-control">
                        </div>

                        <div class="form-group">

                        <button type="submit" class="btn btn-outline-info col-md-3">Sign Up</button>

                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection
