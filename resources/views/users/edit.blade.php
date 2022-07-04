@extends('template.users')
@section('title', "Usuário {{$user->name}}")
@section('body')
<h1>Novo {{$user->name}}</h1>

<form action="{{ route('users.update', $user->id)}}" method="post">
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
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection