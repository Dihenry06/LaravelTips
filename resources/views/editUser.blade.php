<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuario</title>
</head>
<body>
<form action="{{route('users.edit',['user' => $user->id])}}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome do usuario</label>
    <input type="text" name="name" value="{{$user->name}}">

    <label for="">Email</label>
    <input type="email" name="email" value="{{$user->email}}">

    <label for="">Senha</label>
    <input type="password" name="password" value="">

    <input type="submit" value="Atualizar">
</form>
</body>
</html>
