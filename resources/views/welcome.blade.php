@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Vejas os eventos dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h4 class="card-title">{{ $event->title }}</h4>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
    </div>
    @if(count($events) == 0 && $search)
        <p>Não foi possível encontrar nenhum evento com: <strong> {{ $search }} </strong> </p>
        <a href="/" class="btn btn-primary"> Ver Todos</a>
    @elseif(count($events) == 0)
        <p>Não há eventos disponíveis no momento!</p>
    @endif
</div>

@endsection
