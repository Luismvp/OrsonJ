<!DOCTYPE html>
<html lang="en">
<head>

    <?php include "template/head.php" ;?>
    <link href="fuentes.css" rel="stylesheet">
    <style>
        .jumbotron{
            background: url("Cheo.jpg");
        }
    </style>
</head>

<body>

<?php include "template/navBar.php"; ?>

<div class="container">

    <div class="jumbotron">
        <div class="text-center">
            <h1 style="color: black;" class="fontLobster">ORSON J</h1>
        </div>
    </div>


</div>
<hr>
<div class="text-center">
    <h2 class="fontLobster">Música</h2>
</div>
<div class="container">
    <span class="jumbo">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

        <div class="carousel-inner" role="listbox">

        <?php
        require_once "conectar.php";

        $sql = "SELECT disco, imagen, numero FROM fotos_disco";

        foreach ($db->query($sql) as $disco){
            $foto = $disco['imagen'];
            $nombre= $disco['disco'];
            $numero= $disco['numero'];
            if($numero==1){
                echo "<div class='item active'><img class='carousel' src='uploads/$foto' alt='$nombre'></div>";
            }else{
            echo "<div class='item'><img class='carousel' src='uploads/$foto' alt='$nombre' onclick='music.php#$nombre'></div>";
            }
        }
        ?>
        </div>

        <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </span>
    <span>
        <p class="fontRubik" style="font-size: 1.4em">En esta sección encontrarás los distintos discos que forman parte de la discografía de Orson J. <br> Se trata de una recopilación de los mejores temas del artista, disponible para su escucha y descarga. <br> <br>
        En cada uno de los discos se hallan las letras de cada canción, así como una pintura que ambienta<br> la canción que escuchamos. <br><br>
        La discografía intenta seguir la obra artística de Orson J desarrollada en forma de una biblioteca<br> musical, combinada con la obra artística que hay detrás de cada canción, uniéndose la música y la pintura.</p>
         <p><a href="music.php" class="btn btn-danger fontLobster" style="font-size: larger"  role="button">Descubrir</a></p>
    </span>
</div>
<br>
<hr>
<!-- Contenedor de la parte de conciertos -->
<div class="container">
    <div class="text-center">
        <h2 class="fontLobster" style="font-size: xx-large">Shows</h2>
        <table class="table table-hover">
            <tr>
                <th style="text-align: center" class="fontLobster">Nombre</th>
                <th style="text-align: center" class="fontLobster">Fecha del concierto</th>
                <th style="text-align: center" class="fontLobster">Descripción</th>
            </tr>
            <?php
            require_once "conectar.php";
            $sql = "SELECT concierto, descripcion, fecha  FROM conciertos";
            foreach($db->query($sql) as $concierto){
                $nombre = $concierto['concierto'];
                $fecha = $concierto['fecha'];
                $descripcion = $concierto ['descripcion'];
                echo "<tr><td class='fontDancing' style='font-size: large'>$nombre</td><td class='fontDancing' style='font-size: large'>$fecha</td><td class='fontDancing' style='font-size: large'>$descripcion</td></tr>";
            }
            ?>
    </table>
    </div>
</div>

<?php include "template/footer.php"; ?>

<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
