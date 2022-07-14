@extends('template.users')
@section('title', 'Listagem de Postagens')
@section('body')
<h1>Listagem de Postagens</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Título</th>
      <th scope="col">Postagem</th>
      <th scope="col">Data de Cadastro</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>

      <th scope="row">{{ $post->id}}</th>
      <td>{{ $post->title}}</td>
      <td>{{$post->post}}</td>
      <td>{{date('d/m/Y - H:i', strtotime($post->created_at))}}</td>

    </tr>
    @endforeach

  </tbody>
</table>
<div class="justify-content-center pagination">
</div>
@endsection