<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/5/17
 * Time: 2:59
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
    <title>Administrar Conciertos</title>

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
<div class="container" style="margin-top: 40px;margin-bottom: 40px">

    <div class="text-center">
        <h1>En esta página puedes administrar la información<br>de los conciertos en la página principal</h1>

        <h2>Puedes añadir una entrada a la tabla</h2>
        <form enctype="multipart/form-data" action="shows.php" method="post">
            <fieldset>
                <label for="nombre"> Introduce el nombre del concierto</label>
                <br>
                <input type="text" name="nombre" id="nombre">
                <br>
                <label for="fecha"> Introduce la fecha del concierto</label>
                <br>
                <input type="date" name="fecha" id="fecha">
                <br>
                <label for="foto"> Introduce una descripción del concierto</label>
                <br>
                <input type="text" name="descripcion" id="descripcion" maxlength="255">
                <br>
                <br>
                <button type="submit" class="btn btn-success">Añadir</button>
            </fieldset>
        </form>

        <h2>Puedes eliminar una entrada de la tabla</h2>
        <form enctype="multipart/form-data" action="eliminaShows.php" method="post">
            <fieldset>
                <label for="nombre"> Introduce el nombre del concierto</label>
                <br>
                <input type="text" name="nombre" id="nombre">
                <br>
                <br>
                <button type="submit" class="btn btn-danger">eliminar</button>
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

