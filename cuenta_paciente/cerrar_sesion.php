<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
</head>
<body>
    <center><p>Has cerrado la sesión.</p></center>
</body>
</html>
<? header("Refresh:5; url:../index.html"); ?>