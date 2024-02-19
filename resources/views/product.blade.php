@extends('layout.main')
@section('title', 'Produto')
@section('content')
    @if ($id != 0)
        <p>Show id product: {{ $id }}</p>
    @else
        <p>There are no products registred!</p>
    @endif
@endsection