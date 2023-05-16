<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estilo.css">
    <script src="funcion.js"></script>
</head>
<body>
<img src="imagen.png" alt="Descripción de la imagen" id="miImagen">
    <table>
        <thead>
            <tr>
            <th>Imagen</th>
            <th>Datos de la fila</th>
            </tr>
        </thead>
        <tbody id="tabla-body">
        </tbody>
    </table>

    <button id="agregar-fila" onclick="agregarFila()">Agregar fila</button>

    <button id="llamarPHP" onclick="llamarFuncion()">Llamar Metodo</button>

    <p id="miParrafo">Hola, Este es el texto mio</p>
</body>
</html>