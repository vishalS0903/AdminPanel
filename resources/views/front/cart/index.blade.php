@extends('front.layouts.master')
@section('content')
<div class="container">

    <h2 class="mt-5"><i class="fa fa-shopping-cart"></i> Shooping Cart</h2>
    <hr>

    <h4 class="mt-5">
                 {{Cart::instance('default')->count()}}
 items(s) in Shopping Cart</h4>

    <div class="cart-items">

        <div class="row">

            <div class="col-md-12">

                <table class="table">

                    <tbody>
                        @foreach (Cart::instance('default')->content() as $item)

                        <tr>
                            <td>
                                {{-- <img src="{{asset('images/12.jpg')}}" style="width: 5em"> --}}
                                @php
                                $Product_Data = App\Models\Product::find($item->id);
                            @endphp
                            <td><img src="{{ asset('uploads' . '/' . $Product_Data->image) }}"
                                    style="width: 5em">


                            </td>
                            <td>
                                <strong>{{$item->name}}</strong><br>{{$Product_Data->description}}
                            </td>

                            <td>

                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>

                            <td>
                                <select name="" id="" class="form-control qty"
                                    style="width: 4.7em" data-id={{ $item->rowId }}>
                                    <option {{$item->qty == 1 ? 'selected' : ''}}>1</option>
                                    <option {{$item->qty == 2 ? 'selected' : ''}}>2</option>
                                    <option {{$item->qty == 3 ? 'selected' : ''}}>3</option>
                                    <option {{$item->qty == 4 ? 'selected' : ''}}>4</option>
                                </select>
                            </td>

                            <td>{{$item->price}}</td>
                        </tr>
                        @endforeach



                    </tbody>

                </table>

            </div>
            <!-- Price Details -->
                <div class="col-md-6">
                        <div class="sub-total">
                             <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Price Details</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>Subtotal </td>
                                        <td>{{Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td>{{Cart::tax()}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>{{Cart::total()}}</td>
                                    </tr>
                             </table>
                         </div>
                    </div>
                <!-- Save for later  -->
                <div class="col-md-12">
                    <button class="btn btn-outline-dark">Continue Shopping</button>
                    <button class="btn btn-outline-info">Proceed to checkout</button>
                <hr>

                </div>

                <div class="col-md-12">

                <h4>2 items Save for Later</h4>
                <table class="table">

                    <tbody>

                        <tr>
                            <td><img src="{{asset('images/12.jpg')}}" style="width: 5em"></td>
                            <td>
                                <strong>Mac</strong><br> This is some text for the product
                            </td>

                            <td>

                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>

                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>

                            <td>$233</td>
                        </tr>

                        <tr>
                            <td><img src="{{asset('images/01.jpg')}}" style="width: 5em"></td>
                            <td>
                                <strong>Laptop</strong><br> This is some text for the product
                            </td>

                            <td>

                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>

                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>

                            <td>$233</td>
                        </tr>

                        <tr>
                            <td><img src="{{asset('images/12.jpg')}}" style="width: 5em"></td>
                            <td>
                                <strong>Laptop</strong><br> This is some text for the product
                            </td>

                            <td>

                                <a href="">Remove</a><br>
                                <a href="">Save for later</a>

                            </td>

                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>

                            <td>$233</td>
                        </tr>

                    </tbody>

                </table>

            </div>
                </div>


            </div>
        </div>
@endsection
