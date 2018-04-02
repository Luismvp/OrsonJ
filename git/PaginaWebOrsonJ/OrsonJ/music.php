<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OrsonJ</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <?php include "template/favicon.php"; ?>
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
        .artista {
            text-align: center;
            color: #0afaff;
            font-size: 200%;
        }
        .title {
            text-align: center;
            color: #0afaff;
            font-size: 200%;
        }
        .jumbotron{

        }
        .boton{
            text-align: center;
        }
        .thumbnail{
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .boton>li{
            display: inline-block;
        }
        audio {
            left: auto;
        }
        .disco{
            max-height: 290px;
            max-width: 290px;
            min-width: 290px;
            min-height: 290px;
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
<div class='container'>
<div class='text-center'>
    <?php
    require_once "conectar.php";
    $sql = "SELECT disco, imagen, numero FROM fotos_disco";
    foreach($db->query($sql) as $disco){
        $nombre = $disco['disco'];
        $foto = $disco['imagen'];
        echo "<div class='container' style='margin-top: 70px; margin-bottom: 70px;'><div class='jumbotron' id='$nombre'><div id='contenedor disco'><h2 class='fontLobster'>Orson J <br>$nombre</h2> <img src='uploads/$foto' style='max-height:400px; max-width: 400px; min-width:400px; min-height:400px '><br><br>";
        $sqlcanciones = "SELECT nombre, disco, nombreArchivo FROM canciones";
        foreach ($db->query($sqlcanciones) as $cancion){
            $nombreCancion = $cancion['nombre'];
            $disco = $cancion['disco'];
            $archivo = $cancion['nombreArchivo'];
            if($disco == $nombre){
                echo "<div><p class='fontRubik'>$archivo || Orson J</p><audio controls><a href='$nombreCancion'>$archivo</a> <source src='uploads/$nombreCancion' type='audio/ogg'> <source src='uploads/$nombreCancion' type='audio/mp3'></audio></div>";
            }
        }
        echo "</div></div></div><hr>";
    }
    ?>
    </div>
</div>
<?php include "template/footer.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
