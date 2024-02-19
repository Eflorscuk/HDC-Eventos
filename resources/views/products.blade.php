@extends ('layout.main')
@section ('title', 'HDC - Produtos')
@section ('content')
<h1>Products</h1>
@if ($busca != "")
    <p>The user is searching for {{ $busca }}</p>
@endif
@endsection