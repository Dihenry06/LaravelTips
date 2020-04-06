<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuario</title>

    <style>
        .center {
            width: 100%;
            margin: auto;
            align-items: center;
        }

        .border {
            border-bottom: 5px solid #636b6f;
        }
    </style>


</head>

<body>

<h3 class="center">Adicionar novo usuario: <a href="{{route('users.newUser')}}"> new </a></h3>
<hr>
<table class="center">
    <tr class="border">
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Ações</td>
    </tr>
    @foreach($users as $user)
        <tr class="border">
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('users.listUser',[ 'id' => $user->id ])}} ">Ver usuario</a><br>
                <a href="{{ route('users.formEditUser' , [ 'user' => $user->id])}} ">Editar</a>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="user" value="">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>

</html>
