<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Listagem de Usuários</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Cadastro</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id}}</th>
      <td>{{ $user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{date('d/m/Y - H:i', strtotime($user->created_at))}}</td>
      <td> <a href="{{route('users.show', $user->id)}} " class="btn btn-info text-white">VISUALIZAR</a> </td>

    </tr>
    @endforeach

  </tbody>
</table>
    </div>
</body>
</html>