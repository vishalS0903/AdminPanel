@extends('front.layouts.master')
@section('content')
 <br>
 @if (session()->has('msg'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
     {{ session()->get('msg') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
@endif

<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h5 class="display-3"><strong>Welcome,</strong></h5>
        <p class="display-4"><strong>SALE UPTO 50%</strong></p>
        <p class="display-4">&nbsp;</p>
        <a href="#" class="btn btn-warning btn-lg float-right">SHOP NOW!</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
        @foreach ($product as $product)


        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{asset ('uploads/'.$product->image)}}" width="100px" height="200px" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">
                        {{$product->description}}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>&#8377;{{$product->price}}</strong> &nbsp;
                    {{-- <a href="" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</a> --}}
                </div>
                <form action="{{route('cart.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                    Cart</button>
                </form>
            </div>
        </div>
        @endforeach



    </div>
    <!-- /.row -->

</div>
@endsection
