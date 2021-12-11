<?php
include("../connect.php");
$idPaciente = $_POST['idPaciente'];
$pass = $_POST['pass'];

$sql = "update Pacientes set passPaciente='$pass' where idPaciente='$idPaciente'";

$stmt = sqlsrv_query($conn, $sql);

if($stmt){
    header("Location: login_paciente.html");
}
else{
    echo "Su contraseña no ha podido ser cambiada.";
    header("refresh:5;url:olv_contra.html");
}
?>