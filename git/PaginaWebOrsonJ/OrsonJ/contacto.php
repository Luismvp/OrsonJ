<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Orson J - Contacto</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="fuentes.css" rel="stylesheet">
</head>
<body>
<?php include "template/navBar.php"; ?>

<div class="container" style="margin-top: 100px; margin-bottom: 160px">
<div class="text-center">
<h1>Contacto</h1>
    <h3>Recibe toda la información sobre los conciertos y las actualizaciones de la página</h3>
<form action="form.php" method="post">
    <p><label>Name<br><input type="text" name="name"></label></p>
    <p><label>Email <br><input type="email" name="email"></label></p>
    <button type="submit" class="btn btn-success">Enviar <span class="glyphicon glyphicon-arrow-right"></span></button>
    <button type="reset" class="btn btn-default">Resetear</button>
</form>
</div>
</div>
<?php include "template/footer.php"; ?>
</body>
</html>