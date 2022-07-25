@extends('layouts.master')
@section()
@endsection
@section('content')
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Sign In</strong></h3>
                </div>

                <div class="panel-body">

                    <form>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="Email"
                                   class="form-control border-input">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" placeholder="Password"
                                   class="form-control border-input">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Sign In</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
