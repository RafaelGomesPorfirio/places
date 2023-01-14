<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Places</title>
</head>
<body>
    <h1>Criar Local</h1>
    <form action="/places/store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <input type="text" name="address" placeholder="Endereço">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>