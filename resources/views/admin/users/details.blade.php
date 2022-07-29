@extends('admin.layouts.master')
@section('page')
User Order Details
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">{{@$orders->user->name}} order details</h4>
                    <p class="category">List of all registered users</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> User Id</th>
                            <th>Product Name</th>
                            <th>Address</th>
                            <th>Quantity </th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
   <tr>
                            <td>{{@$orders->id}}</td>
                            <td>{{@$orders->product[0]->name}}</td>
                            <td>{{@$orders->address}}</td>
                            <td>{{@$orders->OrderItems[0]->quantity}}</td>
                            <td>{{@$orders->OrderItems[0]->price}}</td>
                            <td>{{@$orders->date}}</td>

                            <td>
                                @if (@$orders->status)
                                <span class="label label-success">confirmed</span>
                                @else
                                 <span class="label label-warning">pending</span>
                                @endif

                            </td>
                        </tr>



                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
