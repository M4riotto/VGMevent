@extends('layouts.main')
@section('title', 'PRODUCTS ID')
@section('content')

@if($id != null)
<h1>exibindo product id: {{$id}}</h1>
@else
<p>sem id</p>
@endif

@endsection

