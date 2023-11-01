<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Respuesta Aviso de interés</h1>
    @if ($type)
        <p>Saludos!</p>
        <p>Se acepto la petición de interes realiazada por la publicación de {{$post->animal->type_animal}} - {{$post->type}}.</p>
        <p>{{$post->title}}</p>
        <p><span>Motivo: </span>{{$reason}}</p>
        <p>Atte. Yokotara</p>
    @else
    <p>Saludos!</p>
    <p>Se rechazo la petición de interes realiazada por la publicación de {{$post->animal->type_animal}} - {{$post->type}}.</p>
    <p>{{$post->title}}</p>
    <p><span>Motivo: </span>{{$reason}}</p>
    <p>Atte. Yokotara</p>
    @endif
</body>
</html>