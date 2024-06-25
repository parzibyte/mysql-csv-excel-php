<?php
include_once "funciones.php";
$personas = obtenerPersonas();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de personas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        thead {
            background-color: #f2f2f2;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Reporte</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Altura</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($personas as $persona) { ?>
            <tr>
                <td><?php echo $persona["id"]; ?></td>
                <td><?php echo $persona["nombre"]; ?></td>
                <td><?php echo $persona["edad"]; ?></td>
                <td><?php echo $persona["altura"]; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
    <a href="./index.php">Cerrar</a>
    <a href="./csv.php">Descargar CSV</a>
    <a href="./excel.php">Descargar Excel</a>
</body>

</html>