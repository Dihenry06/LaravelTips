<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuario</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body{
            margin: 0;
            padding: 0;
        }

    </style>
</head>

<body>

<table class="table table-striped">
    <thead class="">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    @foreach($users as $user)
        <tbody>
            <tr>
                <th scope="col">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>

                    <a href="{{ route('users.listUser',[ 'id' => $user->id ])}} ">Ver usuario</a><br>
                    <a href="{{ route('users.formEditUser' , [ 'user' => $user->id])}} ">Editar</a>

                    <form action="{{route('user.erase',['user' => $user->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="user" value="{{$user->id}}">
                        <button type="submit" class="btn btn-danger">Remover</button>
                    </form>

                </td>
            </tr>
        </tbody>

    @endforeach
</table>

<a class="btn btn-link" href="{{route('users.newUser')}}"> Adicionar novo usuario </a>

</body>

</html>
