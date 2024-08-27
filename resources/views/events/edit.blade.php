@extends('layouts.main')
@section('title', 'Editando' . $event->tittle . ' - VGM events')
@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Imagem do evneto: </label>
                <input type="file" name="image" id="image" class="form-control-file">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="image-preview">
            </div>
            <div class="form-group">
                <label for="title">Evento: </label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento..."
                    value="{{ $event->title }}">
            </div>
            <div class="form-group">
                <label for="date">Data do evento: </label>
                <input type="date" class="form-control" name="date" id="date"
                    value="{{ $event->date->format('Y-m-d') }}">
            </div>
            <div class="form-group">
                <label for="city">Cidade: </label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Local do evento..."
                    value="{{ $event->city }}">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado? </label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : '' }}>Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição: </label>
                <br>
                <textarea name="description" id="description" placeholder="O que vai aconter no evento?" cols="50" rows="3">
                    {{ $event->description }}
                </textarea>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="title">Adicione itens de infraestrutura:</label>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Palco"> Palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open Food"> Open food
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Brindes"> Brindes
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar evento">
        </form>
    </div>

@endsection
