<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/5/17
 * Time: 17:28
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
    <title>Videos</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="fuentes.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 50px;
        }
        .container{
            margin-top: 40px;
        }
        @media (min-width: 400px){
            embed{
                height='360';
                width='360';
            }
        }
        @media (min-width: 450px){
            embed{
                height='400';
                width='400';
            }
        }
        @media (min-width: 600px){
            embed{
                height='360';
                width='540';
            }
        }
        @media screen(min-width: 768px){
            embed{
                min-height='360';
                min-width='540';
            }
        }
        @media screen(min-width: 992px){
            embed{
                min-height='360';
                min-width='540';
            }
        }
        @media screen(min-width: 1200px){
            embed{
                min-height='360';
                min-width='540';
            }
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
    require_once "conectar.php";
    $sql = "SELECT nombre, url FROM videos";
    foreach($db->query($sql) as $video){
        $nombre = $video['nombre'];
        $url = $video['url'];
        echo "<div class='container' style='margin-bottom: 150px; margin-top: 150px;'><div class='text-center'><div id='contenedor video'><h2 class='fontLobster'>$nombre</h2><br><embed src='$url'></embed></div></div></div> <hr>";
    }
?>
<?php include "template/footer.php"; ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

