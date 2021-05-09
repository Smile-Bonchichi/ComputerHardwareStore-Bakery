@extends('master')

@section('content')

    <div class="starter-template">
        <h1> {{ $category->name }} {{ $category->products->count() }} </h1>

        <p> {{ $category->discription }} </p>

        <div class="row">
            @foreach($category->products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>
    </div>

@endsection
