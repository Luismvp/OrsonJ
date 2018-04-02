<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 25/5/17
 * Time: 13:21
 */

require_once "conectar.php";

$nombre = $_POST["nombre"];
$foto = basename($_FILES["foto"]["name"]);
$target_path="uploads";
$target_path = $target_path . "/" . $foto;
if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
    echo "El archivo " . $foto . " ha sido subido del disco " . $nombre;
    $sql = "SELECT disco, imagen, numero FROM fotos_disco";
    $num = 1;
    foreach($db->query($sql) as $disco){
        $num++;
    }
    $sql_insert = "INSERT INTO `fotos_disco`(`disco`, `imagen`, `numero`) VALUES ('$nombre','$foto','$num')";
    try{
        $db->query($sql_insert);
    } catch (Exception $error){
        die("Error al insertar el disco en la base de datos" . $error->getMessage());
    }
} else {
    echo "Ha ocurrido un error, trate de nuevo!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Subir canciones</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="fuentes.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 50px;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php include "template/navBar.php";?>

<h1>En esta página puedes subir las canciones del disco</h1>
<div class="container" style="margin-top: 40px;margin-bottom: 40px">
    <form enctype="multipart/form-data" action="cancionDisco.php" method="post">
        <fieldset>
            <label for="name">Introduce el nombre de la canción</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <label for="cancion">Introduce el archivo de la canción</label>
            <br>
            <input type="file" name="cancion" id="cancion">
            <br>
            <input type="text" name="nombre" value="<?php echo $nombre ?>">
            <br>
            <button type="submit">+</button>
            <button type="button" class="btn btn-danger"><a href="disco.php" style="text-underline: none; color: rgba(255,255,255,1);">No mas canciones</a></button>

    </form>
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>