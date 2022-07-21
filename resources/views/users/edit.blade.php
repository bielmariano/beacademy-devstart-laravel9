@extends('template.users')
@section('title', "Usuário {{$user->name}}")
@section('body')
<h1>Novo {{$user->name}}</h1>

@if($errors->any())

<div class="alert alert-danger" role="alert">
  @foreach($errors->all() as $error)
  {{ $error }} <br>
  @endforeach
</div>

@endif

<form action="{{ route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome" value="{{ $user->name }}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="image">Selecione uma Imagem</label>
    <input type="file" class="form-control form control-md" id="image" name="image">
  </div>
  <div class="form-check mb-5">
    <input class="form-check-input" type="checkbox" id="admin" name="admin" value="1" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Administrador
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection