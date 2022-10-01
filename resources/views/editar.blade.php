<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Pessoa</title>
</head>

<body>
    <center>
        <h1>Resultado</h1>
        <p>Id: <input type="text" name="id" value="{{$pessoa->id}}" disabled> </p>
        <hr>


        <form action="/editar-pessoa/{{$pessoa->id}}" method="post">
            @csrf
            <label for="lblNome">Nome do Usuário </label>
            <input type="text" name="nome" value="{{$pessoa->nome}}" >

            <br><br>

            <label for="lblIdade">Idade do Usuário</label>
            <input type="text" name="idade" value="{{$pessoa->idade}}" >

            <br><br>

            <button>atualizar</button>
        </form>

        <br><br>
        
        <a href="/">Home</a>
    </center>
</body>

</html>