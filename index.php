<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tarea</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "includes/config.php";

                    $query = $conn->query("SELECT * FROM tareas");

                    foreach ($query as $key => $value) {

                    ?>
                        <tr>
                            <th scope="row"><?= $value['id']; ?></th>
                            <td><?= $value['tarea']; ?></td>
                            <td><?= $value['fecha']; ?>/<td>
                            <td>
                                <a href="eliminar.php?id=<?= $value['id']; ?>">
                                    <button class="btn btn-danger">Eliminar</button>
                                 </a>
                                    <button class="btn btn-info">Editar</button>
                               
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>