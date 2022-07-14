@extends('template.users')
@section('title', "Listagem de Postagens do {$user->name}")
@section('body')
<h1>Postagens do {{$user->name}}</h1>

@foreach($posts as $post)

<div class="mb-3">
    <label for="" class="form-label">Identificação Nº:<br><b>{{ $post->id }}</b></label>
        <br>
    <label for="" class="form-label">Itatus:<br><b>{{ $post->active?'Ativo':'Inativo' }}</b></label>
        <br>
    <label for="" class="form-label">Títulos:<br><b>{{ $post->title }}</b></label>
        <br>
        <label for="" class="form-label">Postagem:</b></label>
        <br>
    <textarea for="" class="form-control" rows="3">{{ $post->post }}</textarea>
</div>
    @endforeach

    @endsection