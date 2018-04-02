<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

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
<?php include "template/navBar.php" ?>

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <div class="text-center">
        <h1>Login</h1>
        <p>Introduce usuario y contraseña</p>
        <form id="loginForm" action="Cheo.php" method="post" data-toggle="validator" role="form">
            <div class="form-group" id="user-group">
                <label for="user">Usuario</label>
                <br>
                <input type="text" name="user" class="form-control" id="user" placeholder="introduce tu usuario" required data-error="El usuario introducido no es correcto" data-remote="validateField.php">
            </div>
            <div class="form-group" id="password-group">
                <label for="password">Contraseña</label>
                <br>
                <input type="password" name="password" class="form-control" id="password"  autocomplete="off"
                       placeholder="introduce la contraseña" required
                       data-error="La contraseña introducida no es correcta">
            </div>
            <button type="submit" class="btn btn-success" id="btnSubmit">Enviar <span class="glyphicon glyphicon-arrow-right"></span></button>
            <button type="reset" class="btn btn-default">Resetear</button>
        </form>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="validator.js"></script>
</body>
</html>
