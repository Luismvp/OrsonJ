<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/5/17
 * Time: 3:27
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Escribir Email</title>

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

<?php include "template/navBar.php"; ?>

<div class="container" style="margin-top: 40px;margin-bottom: 40px">
    <div class="text-center">
        <h1>En esta página puedes escribir un email a los incluidos en la lista de contactos</h1>
        <form enctype="multipart/form-data" action="email.php" method="post">
            <fieldset>
                <h2>Introduce la cabecera del email</h2>
                <input type="text" name="subject">
                <br>
                <h2>Introduce el contenido del email</h2>
                <br>
                <textarea id="email" name="email" style="min-width: 300px; min-height: 200px;"></textarea>
                <br>
                <button type="submit" class="btn btn-success">Enviar email</button>
            </fieldset>
        </form>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

