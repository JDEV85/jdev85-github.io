

<?php 

    require_once("../Modelo/Docentes.php");
    require_once("../../Usuarios/Modelo/Usuarios.php");

    $modeUser = new Usuarios();
    $modeUser->validateSession();

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sistema de Notas</title>
</head>
<body>
    <div class="add-form-div  delete-form-div">
    <h1>Eliminar Docente</h1>
    <form class="add-form delete-form" method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="<?php echo $id ?>">
        <p>Seguro que desea eliminar este docente?</p>
        <input type="submit" value=" Eliminar Docente ">
    </form>
    </div>
</body>
</html>