<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/5/17
 * Time: 15:19
 */
$video = $_POST["nombre"];
$url = $_POST["url"];
if(empty($video)){
    $success = false;
    echo "<h1>Introduce un nombre para el video</h1>";
}else if(empty($url)){
    $success = false;
    echo "<h1>Introduce la url del video</h1>";
}else{
    $success = true;
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
    <title>Video Guardado</title>

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

<?php
    if($success){
        require_once "conectar.php";
        $sql_insert = "INSERT INTO `videos`(nombre, url) VALUES ('$video','$url')";
        try{
            $db->query($sql_insert);
        } catch (Exception $error){
            die("Error al insertar el video en la base de datos" . $error->getMessage());
        }
        echo "<div class='text-center'><h1>El video ha sido subido correctamente</h1></div>";
    }else{
        echo "<div class='text-center'><h1>El video no ha sido subido correctamente </h1></div>";
    }
    ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
