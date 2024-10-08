@extends('layouts.app')

@section('title', $product->title)

@section('content')
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <p>In stock: {{ $product->stock }}</p>
@endsection
