<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 21/4/17
 * Time: 19:08*
 */


    define("EMAIL_SUBJECT","Lista de Correos");

    $senderEmail = $_POST["email"];

    if(!isset($senderEmail)){
        $errorEmail = "Debe escribir una dirección de correo";
    } else {
        $senderEmail = filter_var($senderEmail,FILTER_SANITIZE_EMAIL);
        if(!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
            $errorEmail = "La dirección de correo electrónica es incorrecta";
        }
    }

    $senderName = $_POST["name"];

    if (!isset($senderName)){
        $errorName = "Debe escribir su nombre";
    } else {
        $senderName = filter_var($senderName, FILTER_SANITIZE_STRING);
        if($senderName == "") {
            $errorName = "Debe escribir un nombre válido";
        }
    }

    $success = false;

    if(!isset($errorEmail) && !isset($errorName) && !isset($errorMessage)){
    $recipient = $senderName." <".$senderEmail.">";
    $headers = "From: "."Orson J"." <"."orsonj.page@gmail.com".">";
    $success = mail($recipient,"ORSON J","Hola ".$senderName.". Gracias por incluirte en la lista de correos de Orson J, por aquí recibirás información relativa a nuevos temas, conciertos, videos etc.",$headers);
}
?>
<!DOCTYPE html >
<html lang = "en" >
    <head >
        <meta charset = "utf-8" >
        <meta http - equiv = "X-UA-Compatible" content = "IE=edge" >
        <meta name = "viewport" content = "width=device-width, initial-scale=1" >
        <!--The above 3 meta tags * must * come first in the head; any other head content must come * after * these tags-->
        <meta name = "description" content = "Page Description" >
        <meta name = "author" content = "Luis" >
        <title >Lista de Correo</title >

        <!--Bootstrap -->
        <link href = "css/bootstrap.min.css" rel = "stylesheet" >
        <link href="fuentes.css" rel="stylesheet">
        <!--HTML5 shim and Respond . js for IE8 support of HTML5 elements and media queries-->
        <!--WARNING: Respond . js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
        <div class="text-center">
        <?php
        if($success):
            ?>
            <div class="container">
            <div class="panel panel-success">
                <?php
                    require_once "conectar.php";
                    $sql_insert = "INSERT INTO `correos`(nombre, correo) VALUES ('$senderName','$senderEmail')";
                    try{
                        $db->query($sql_insert);
                    } catch (Exception $error){
                        die("Error al insertar el correo en la base de datos" . $error->getMessage());
                }
                ?>
            <h2> Hola <?php echo "$senderName"?>.<br>Has recibido en tu correo un mensaje de confirmación<br>de que has sido incluido en la lista de correos.</h2>
            <p>¡Gracias por incluirte en la lista!</p>
            </div>
            </div>
        <?php
        else:
            ?>
            <div class="container">
            <div class=" panel panel-danger">
            <p>Lo sentimos, no se ha podido incluir tu correo en la lista.</p>
            </div>
            </div>
        <?php
        endif
        ?>
        <p><a href="index.php" class="btn btn-primary" role="button">Home</a></p>
        </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script >
        <!--Include all compiled plugins(below), or include individual files as needed-->
        <script src = "js/bootstrap.min.js" ></script >
    </body >
</html >