<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Goven</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> Hola! </h1>
    <p> Estas personas son govenes: </p>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th></th>
                <th></th>
                <th>Telefono</th>
                <th></th>
                <th></th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
                <tr>
                    <td>{{ $contacto->nombre }}</td>
                    <td></td>
                    <td></td>
                    <td>{{ $contacto->telefono }}</td>
                    <td></td>
                    <td></td>
                    <td>{{ $contacto->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>