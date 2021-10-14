<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Correo Electr&oacute;nico</h1>
    <br />
    <p>Formulario de Contacto</p>

    <p><strong>Nombre: </strong>{{ $contacto['name'] }}</p>
    <p><strong>Email: </strong>{{ $contacto['correo'] }}</p>
    <p><strong>Fecha: </strong>{{ $contacto['fecha'] }}</p>
    <p><strong>Seccion: </strong>{{ $contacto['seccion'] }}</p>
    <p><strong>Mensaje: </strong>{{ $contacto['mensaje'] }}</p>
</body>
</html>