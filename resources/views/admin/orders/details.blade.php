@extends('admin.layouts.master')

@section('page')
     Orders Details
@endsection

@section('content')
<div class="container">

    <div class="col-md-12">
        {{-- @include('admin.layouts.messege') --}}
        <div class="card">
            <div class="header">
                <h4 class="title">Orders Detail</h4>
                <p class="category">List of all orders</p>
                {{-- <a href="{{route('orders.details',$order->id)}}" method="post" enctype="multipart/form-data"> --}}

            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                          @endphp

                         {{-- @foreach ($order as $order) --}}
                        <tr>
                            <td>{{@$order->id}}</td>
                            <td>{{@$order->date}}</td>
                            <td>{{@$order->OrderItems[0]->quantity}}</td>
                            <td>{{@$order->OrderItems[0]->price}}</td>
                            <td>

                                @if ($order->status)

                             <span class="label label-success">Confirmed</span>
                             @else
                             <span class="label label-warning">pending</span>

                                @endif

                            </td>
                           </tr>
                        {{-- @endforeach --}}
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h4 class="title">Product Details</h4>
                <p class="category">Product</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{@$order->product[0]->id}}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{@$order->product[0]->name}}</td>
                        </tr>

                        <tr>
                            <th>Price</th>
                            <td>{{@$order->product[0]->price}}</td>
                        </tr>

                        {{-- <tr>
                            <th>Registered At</th>
                            <td>{{$order->registered_at}}</td>
                        </tr> --}}

                        {{-- <tr>
                            <th>Created At</th>
                            <td>12 days ago</td>
                        </tr>

                        <tr>
                            <th>Updated At</th>
                            <td>5 days ago</td>
                        </tr>--}}

                        <tr>
                            <th>Image</th>
                            <td>
                                {{-- <img src="{{asset('uploads'.@$order->image)}}" height="50" width="50" alt="Image"> --}}
                                <img src="{{asset('uploads/'.@$order->product[0]->image)}}" width="50" height="50">

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
{{-- </div>
<div class="container"> --}}

    <div class="col-md-6">

        <div class="card">
            <div class="header">
                <h4 class="title">User Detail</h4>
                <p class="category">User</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{@$order->user->id}}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{@$order->user->name}}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{@$order->user->email}}</td>
                        </tr>

                        <tr>
                            <th>Registered At</th>
                            <td>{{@$order->created_at}}</td>
                        </tr>

                        {{-- <tr>
                            <th>Created At</th>
                            <td>12 days ago</td>
                        </tr>

                        <tr>
                            <th>Updated At</th>
                            <td>5 days ago</td>
                        </tr>

                        <tr>
                            <th>Image</th>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail" style="width: 150px;"></td>
                        </tr>--}}

                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
