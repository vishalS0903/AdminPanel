@extends('admin.layouts.master')
@section('page')
Orders Details

@endsection
@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            @if(session()->has('message'))

            <div class="alert alert-success" >
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true"> &times;</span>
                </button>
            </div>
             @endif
            <div class="card">
                <div class="header">
                    <h4 class="title">Orders</h4>
                    <p class="category">List of all orders</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            {{-- <th>Address</th> --}}
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            @foreach ($order as $order)
                            <td>{{$order->id}}</td>
                            <td>{{@$order->user->name}}
                                {{-- this will go to user function in order.php and run it i.e. do relation --}}
                            </td>

                            <td>

                                @foreach ($order->product as $item)
                                {{-- here product is the function name from order.php while making relation  --}}
                                {{$item->name}}

                                @endforeach
                            </td>
                            {{-- @dd($order); --}}

                            <td>

                                @foreach ($order->orderItems as $item)
                                {{$item->quantity}}

                                @endforeach
                            </td>
                            {{-- <td>7/433,USA</td> --}}
                            <td>

                                @if ($order->status)

                             <span class="label label-success">Confirmed</span>
                             @else
                             <span class="label label-warning">pending</span>

                                @endif

                            </td>
                            <td>
                                @if($order->status)
                                <a href="{{route('orders.pending',$order->id)}}">
                                <button class="btn btn-danger" type="button"
                                        >Pending</button></a>
                                  @else
                                  <a href="{{route('orders.confirm',$order->id)}}">
                                    <button class="btn btn-success" type="button"
                                            >Confirm</button></a>
                                        @endif


                                <a href="{{route('orders.details',$order->id)}}">
                                    <button class="btn btn-info" type="button">
                                        Details</button> </a>
                                    </td>

                        </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection
