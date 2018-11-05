{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<style>--}}
        {{--.product-image {--}}
            {{--height: 45px;--}}
        {{--}--}}
    {{--</style>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Shopping Cart</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--@if(Cart::isEmpty())--}}
                            {{--<div class="alert alert-info">--}}
                                {{--Your cart is empty--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--<table class="table">--}}
                                {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th colspan="2">name</th>--}}
                                        {{--<th>price</th>--}}
                                        {{--<th>qty</th>--}}
                                        {{--<th>total</th>--}}
                                        {{--<th></th>--}}
                                    {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                    {{--@foreach(Cart::getItems() as $item)--}}
                                        {{--<tr>--}}
                                            {{--<td width="55"><img src="{{ $item->product->getThumbnailUrl() ?: '/images/product.jpg' }}" class="product-image"/></td>--}}
                                            {{--<td>--}}
                                                {{--<a href="{{ route('shop.product', $item->product) }}">--}}
                                                    {{--{{ $item->product->getName() }}--}}
                                                {{--</a></td>--}}
                                            {{--<td>{{ format_price($item->price) }}</td>--}}
                                            {{--<td>{{ $item->quantity }}</td>--}}
                                            {{--<td>{{ format_price($item->total) }}</td>--}}
                                            {{--<td>--}}
                                                {{--<form action="{{ route('cart.remove', $item) }}"--}}
                                                      {{--style="display: inline-block" method="post">--}}
                                                    {{--{{ csrf_field() }}--}}
                                                    {{--<button class="btn btn-link btn-sm"><span class="text-danger">&xotime;</span></button>--}}
                                                {{--</form>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                    {{--@endforeach--}}
                                {{--</tbody>--}}
                                {{--<tfoot>--}}
                                {{--<tr>--}}
                                    {{--<th colspan="4"></th>--}}
                                    {{--<th>--}}
                                        {{--{{ format_price(Cart::total()) }}--}}
                                    {{--</th>--}}
                                    {{--<th></th>--}}
                                {{--</tr>--}}
                                {{--</tfoot>--}}

                            {{--</table>--}}

                            {{--<p class="text-right">--}}
                                {{--<a href="{{ route('shop.index') }}" class="btn btn-lg btn-link">Continue Shopping</a>--}}
                                {{--<a href="{{ route('checkout.show') }}" class="btn btn-lg btn-primary">Proceed To Checkout</a>--}}
                            {{--</p>--}}

                        {{--@endif--}}


                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

@extends('layouts.amado')

@section('products')
    <div class="cart-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Cart::getItems() as $item)
                                <tr>
                                <td class="cart_product_desc">
                                    <h5>
                                        {{ $item->product->getName() }}
                                    </h5>
                                </td>
                                <td class="price">
                                    <span>{{ format_price($item->price) }}</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <p>Qty</p>
                                        <div class="quantity">
                                            {{--<span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>--}}
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="{{ $item->quantity }}">
                                            {{--<span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>--}}
                                        </div>
                                    </div>
                                </td>
                                    <td><form action="{{ route('cart.remove', $item) }}"--}}
                                              style="display: inline-block" method="post">
                                            {{ csrf_field() }}
                                            <button class="btn btn-link btn-sm"><span class="text-danger">&xotime;</span></button>
                                        </form></td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>{{ format_price(Cart::total()) }}</span></li>
                            <li><span>admin:</span> <span>Free</span></li>
                            <li><span>total:</span> <span>{{ format_price(Cart::total()) }}</span></li>
                        </ul>
                        <div class="cart-btn mt-100 text-center">
                            <a href="{{ route('checkout.show') }}" class="btn amado-btn w-100">Checkout</a>
                            <a href="{{ route('shop.index') }}" class="d-inline-block mt-15"><b class="fa fa-shopping-cart"></b> Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix mb-50"></div>

@endsection
