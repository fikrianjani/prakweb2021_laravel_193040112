@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $nickname }} </p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="300" height="220" class="img-thumbnail rounded-circle">
@endsection