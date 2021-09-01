@extends('layouts.app')
<title>{{$category->name}}</title>
@section('content')
    <div class="container">
        <div class="starter-template" align="center">
            <h1>{{$category->name}}</h1>
            <p>
                {{$category->description}}
            </p>
        </div>
    </div>
@stop
