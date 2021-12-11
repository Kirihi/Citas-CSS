<?php
session_start();
if($_SESSION['idPaciente']){
    $cedula = $_SESSION['idPaciente'];
}

$idCita = $_POST['idCita'];

include("../../connect.php");

$sql = "delete from Citas where idCita = '$idCita' and idPaciente = '$cedula'";
$stmt = sqlsrv_query($conn, $sql);

if($stmt){
    header("Location: ../cuenta.php");
}
else{
    echo "Su cita no ha podido ser cancelada.";
    header("refresh: 5;url:cancelar_cita.html");
}
?>