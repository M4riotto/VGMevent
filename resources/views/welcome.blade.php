@extends('layouts.main')
@section('title', 'VGM events')
@section('content')


    @if ($nome === null)
        <p>nao logdado</p>
    @elseif('teste' === 'teste')
        <p>isso é um teste</p>
    @else
        <p>{{ $nome }}</p>
    @endif


    @for ($i = 0; $i < count($arr); $i++)
        <h1>{{ $arr[$i] }} - {{ $i }}</h1>

        @if ($i === 2)
            <p>o I=2</p>
        @endif
    @endfor

    @foreach ($names as $name)
        <p>{{$loop -> index}}</p>
        <p>{{$name}}</p>
    @endforeach

    @php
        $nome = 34343;
        echo $nome;
    @endphp

    @endsection