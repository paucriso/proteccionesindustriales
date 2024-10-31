<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje de Formulario</title>
</head>
<body>
    <h3>Mensaje:</h3>
    <p><strong>Nombre: </strong>{{ $data['name'] }}</p>
    <p><strong>Correo Electrónico: </strong>{{ $data['email'] }}</p>
    <p><strong>Teléfono: </strong>{{ $data['phone'] }}</p>
    <p><strong>Mensaje: </strong>{{ $data['message'] }}</p>
</body>
</html>
