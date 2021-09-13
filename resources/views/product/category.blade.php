@extends('layouts.app')
@section('title', $category->name)
@section('content')
    <div class="container">
        <div class="starter-template" align="center">
            <h1>{{$category->name}}</h1>
            <p>
                {{$category->description}}
            </p>
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
