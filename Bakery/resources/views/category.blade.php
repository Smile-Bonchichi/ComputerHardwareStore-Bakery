@extends('master')

@section('content')

    <div class="starter-template">
        <h1> {{ $category->name }} </h1>

        <p> {{ $category->discription }} </p>
        
        <div class="row"> @include('card', ['category' => $category]) </div>
    </div>

@endsection