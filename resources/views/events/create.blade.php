@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem Do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" required>
            <div class="invalid-feedback">Por favor Informe o Nome do Evento!</div>
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" required>
            <div class="invalid-feedback">Por favor Informe a Data do Evento!</div>
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" required>
            <div class="invalid-feedback">Por favor Informe o Local do Evento!</div>
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?:</label>
            <select name="private" id="private" class="form-control" required>
                <option value="0"> Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description" required>Descrição:</label>
            <textarea name="description" id="description" class="form-control"
                placeholder="O que vai acontecer no evento?" required></textarea>
            <div class="invalid-feedback">Por favor Informe a Descrição do Evento!</div>
        </div>
        <div class="form-group">
            <label for="info" required>Adicione itens de infraestrutura:</label>
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
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" value="Criar Evento" class="btn btn-primary">
    </form>
</div>
@endsection
