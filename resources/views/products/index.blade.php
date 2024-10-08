@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>Products</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a>
                - ${{ $product->price }}
            </li>
        @endforeach
    </ul>
@endsection
