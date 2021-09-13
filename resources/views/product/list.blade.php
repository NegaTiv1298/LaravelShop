@extends('layouts.app')
@section('title', 'Товары')
@section('content')
    <div class="container" align="center">
        <h1>Все товары</h1>
        <div class="starter-template">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-auto">
                        <div class="panel-list">
                            <img class="product_image" src="{{$product->image}}">
                            <h3>
                                {{$product->name}}
                            </h3>
                            <h5 class="product_price">{{ $product->price }} грн.</h5>
                            <a href="/{{$product->id}}">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
