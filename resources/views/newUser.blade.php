<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuario</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="">Nome do usuario</label>
        <input type="text" name="name">

        <label for="">Email</label>
        <input type="email" name="email">

        <label for="">Senha</label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
