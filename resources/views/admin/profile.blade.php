@extends('admin.layouts.master')
@section('page')
profile
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <div class="card">
                    <div class="header">
                        <h4 class="title">profile</h4>
                    </div>
                    <div class="content">
                        <form action="{{route('profile.update',$user->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Name:</label>
                                        <input type="text" name="name" class="form-control border-input" value="{{$user->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text"  name="email" class="form-control border-input" value="{{$user->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password"  name="password" class="form-control border-input" value="{{$user->password}}">
                                    </div>

                                    {{-- <div class="form-group">
                                        <label>Profile Image:</label>
                                        <input type="file" name="image" class="form-control border-input">
                                    </div> --}}

                                </div>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update profile</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
