@extends('layouts.app')
<title>Категории</title>
@section('content')
<div class="container" >
    <div class="starter-template" align="center">
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{$category->code}}">
                    <img class="category_image" src="{{$category->image}}">
                <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
        @endforeach
    </div>
</div>
@stop
