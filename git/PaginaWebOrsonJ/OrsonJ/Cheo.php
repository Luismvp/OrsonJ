<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 27/4/17
 * Time: 15:29
 */
$user = $_POST["user"];
$password = $_POST["password"];

$errors = array();
$data = array();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($user)){
        $errors["user"] = "Introduce el usuario";
    }else if(!empty($user) && $user != "Cheorsonj"){
    $errors["user"] = "El usuario introducido no es el correcto";
    } else {
        if(empty($password)){
            $errors['password'] = "Introduce la contraseña";
        } else if ($password != "siempresonlas420") {
            $errors['password'] = "La contraseña introducida no es la correcta";
        }
    }
    $success = false;
    if(!empty($errors)){
        $data['success']=false;
        $data['errors'] = $errors;
    } else {
        $success = true;
        $data['success']=$success;
    }
   // echo json_encode($data);
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
    <title>Administración de Página</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="fuentes.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 50px;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php if($success):?>

    <?php include "template/navBar.php"; ?>

    <div class="container" style="margin-top: 100px; margin-bottom: 100px">
        <div class="text-center">
            <h1>Bienvenido a la Página de administración Cheo.</h1>
            <p>Tus posibilidades de customización son las siguientes</p>
            <div class=" btn-group-vertical">
                <button type="button" class="btn btn-danger"><a href="disco.php" style="text-underline: none; color: rgba(255,255,255,1);">Subir nuevo Disco</a></button>
            <button type="button" class="btn btn-warning"><a href="video.php" style="text-underline: none; color: rgba(255,255,255,1);">Subir nuevo video</a></button>
            <button type="button" class="btn btn-success"><a href="conciertos.php" style="text-underline: none; color: rgba(255,255,255,1);">Actualizar Conciertos</a></button>
                <button type="button" class="btn btn-success" style="background: #040400;"><a href="enviar.php" style="text-underline: none; color: rgba(255,255,255,1);">Escribir correo</a></button>
            </div>
        </div>
    </div>
<?php
else :
?>
<div class="container">
    <?php include "template/navBar.php"; ?>
    <br>
    <div class="text-center">
        <p>Lo sentimos, no has podido entrar en el sistema.</p>
    </div>
</div>

    <?php
endif
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

