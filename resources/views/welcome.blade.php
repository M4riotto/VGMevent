@extends('layouts.main')
@section('title', 'VGM events')
@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            <input type="submit" class="btn btn-primary mt-3">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
       @if ($search)
       <h2>Buscando por: {{$search}}</h2>
       @else
       <h2>Próximos eventos</h2>
       <p class="subtitle">Veja os evento dos próximos dias</p>
       @endif
        <div id="cards-container" class="row">


            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{$event->image}}" alt={{$event->title}}>
                    <div class="card-body">
                        <p class="card-date">{{date('d/m/y', strtotime($event->date))}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants"> {{count($event->users)}} - participantyes</p>
                        <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach

            @if(count($events) == 0 && $search)
            <p>Não foi possivel encontrar nenhum evento com <b><u> {{$search}}</u></b>! <a href="/" class="btn btn-primary">Ver todos</a></p>
            @elseif(count($events) == 0)
            <p>Não há eventos disponiveis</p>
            @endif

        </div>
    </div>


@endsection
