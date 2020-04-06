<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuario</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label for="">Nome do usuario</label>
                <input class="form-control" type="text" name="name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label for="">Senha</label>
                <input class="form-control" type="password" name="password">
            </div>
        </div>

        <button type="submit" class="btn btn-primary col-md-6 offset-md-3">Cadastrar</button>
    </form>
</body>
</html>
