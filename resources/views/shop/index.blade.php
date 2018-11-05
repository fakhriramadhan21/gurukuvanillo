{{--@extends('layouts.layout-shop')--}}

{{--@section('content')--}}
{{--<style>--}}
{{--.product {--}}
{{--margin-bottom: 1.35em;--}}
{{--}--}}

{{--.product h5 {--}}
{{--margin-bottom: 0;--}}
{{--}--}}

{{--.product a h5 {--}}
{{--text-decoration: none;--}}
{{--}--}}

{{--.product img {--}}
{{--max-width: 100%;--}}
{{--display: block;--}}
{{--}--}}

{{--.product-attrs {--}}
{{--margin-top: 0;--}}
{{--}--}}
{{--</style>--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Product List</div>--}}

{{--<div class="panel-body">--}}
{{--@if (session('status'))--}}
{{--<div class="alert alert-success">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}

{{--<div class="row">--}}

{{--@foreach($products as $product)--}}
{{--<article class="col-xs-12 col-sm-6 col-md-4 product">--}}
{{--<a href="{{ route('shop.product', $product) }}">--}}
{{--@if($product->hasImage())--}}
{{--<img src="{{ $product->getThumbnailUrl() }}"/>--}}
{{--@else--}}
{{--<img src="/images/product.jpg"/>--}}
{{--@endif--}}
{{--<h5>{{ $product->name }}</h5>--}}
{{--</a>--}}
{{--<div class="product-attrs">--}}
{{--<span class="price">{{ format_price($product->price) }}</span>--}}
{{--</div>--}}
{{--</article>--}}
{{--@endforeach--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.amado')
@section('products')
    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            @foreach($products as $product)
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{ route('shop.product', $product) }}">
                        {{--<img src="{{asset('amado/')}}/img/bg-img/1.jpg" alt="">--}}
                        {{--@if($product->hasImage())--}}
                            {{--<img src="{{ $product->getThumbnailUrl() }}"/>--}}
                        {{--@else--}}
                        @php
                        $img = ['examples/card1.jpg','examples/card2.jpg','examples/card3.png','product.jpg'];
                        @endphp
                            <img src="{{asset('images/')}}/{{$img[rand(0,3)]}}"/>
                    {{--@endif--}}
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>{{ format_price($product->price) }}</p>
                            <h4>{{ $product->name }}</h4>
                        </div>
                    </a>
                </div>
        @endforeach
        </div>
    </div>
    <!-- Product Catagories Area End -->

    <div class="clearfix mb-50"></div>
@endsection
