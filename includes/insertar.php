
User
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar nueva tarea </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <form action="" method="POST">

                <div class="mb-3 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="tarea" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" name="insertar" class="btn btn-primary">crear tarea</button>
            </form>

        </div>
        <?php
if (isset($_POST['insertar'])) {
    $tarea = $_POST['tarea'];

    if (!empty($tarea)) {
        require "config.php"; 

        $query = $conn->query("INSERT INTO tareas (tarea) VALUES ('$tarea')");

        if ($query) {
           header("location: ../index.php");
        } else {
?>
            <div class="alert alert-danger mt-3" role="alert">
                Error al insertar la tarea.
            </div>
<?php
        }
    } else {
?>
        <div class="alert alert-danger mt-3" role="alert">
            Error: El campo no contiene tareas.
        </div>
<?php
    }
}
?>