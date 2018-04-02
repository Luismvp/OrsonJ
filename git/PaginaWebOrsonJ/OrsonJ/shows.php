<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/5/17
 * Time: 14:12
 */
$conci = $_POST["nombre"];
$fecha = $_POST["fecha"];
$descripcion = $_POST["descripcion"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Introducir concierto</title>

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

<?php include "template/navBar.php"; ?>

<?php
    if(empty($conci)){
        echo "<div class=\"text-center\"><h2>El nombre del concierto no ha sido introducido</h2> </div>";
    } else if(empty($descripcion)){
        echo "<div class=\"text-center\"><h2>La descripción del concierto no ha sido introducida</h2> </div>";
    } else {
        require_once "conectar.php";
        $sql_insert = "INSERT INTO `conciertos`(concierto, descripcion, fecha) VALUES ('$conci','$descripcion','$fecha')";
        try{
            $db->query($sql_insert);
        } catch (Exception $error){
            die("Error al insertar el concierto en la base de datos" . $error->getMessage());
        }
        echo "<div class='text-center'><h2>El concierto ha sido insertado en la base de datos</h2></div>";
        $sql = "SELECT nombre, correo FROM correos";
        $subject = "concierto ".$conci." ".$fecha;
        foreach($db->query($sql) as $correo){
            $nombre = $correo['nombre'];
            $email = "luismvp96@gmail.com";
            $recipient = $nombre." <".$email.">";
            $headers = "From: "."Orson J"." <"."orsonj.page@gmail.com".">";
            $message = "El dia ".$fecha." tendrá lugal el ".$conci."\n".$descripcion ;
            $success = mail($recipient, $subject,"Hola ".$nombre."\n".$message,$headers);
        }
    }
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

