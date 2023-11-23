<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
    @foreach ($pruebas as $prueba)
        <tr>
            <td>{{ $prueba->id }}</td>
            <td>{{ $prueba->nombre }}</td>
        </tr>
    @endforeach

    </table>

</body>
</html>