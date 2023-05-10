@extends('layouts.app')
@section('PAKYOW', 'PAKYOW PRODUCTS')

@section('content')

    <ul>
        @foreach ($products as $product)
        <li>{{$product->ProductName}}</li>
        <li>
            <img src="{{$product->ProductImage}}" alt="image">
        </li>
        @endforeach
    </ul>


@endsection
