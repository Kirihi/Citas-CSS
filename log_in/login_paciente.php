<?php
include("../connect.php");

$idPaciente = $_POST['idPaciente'];
$passPaciente = $_POST['passPaciente'];

$sql = "select idPaciente, passPaciente from Pacientes where idPaciente = '$idPaciente' and passPaciente = '$passPaciente'";
$stmt = mysqli_query($conn, $sql);

session_start();
if (isset($_POST['idPaciente'])){
    $_SESSION['idPaciente'] = $_POST['idPaciente'];
}
if($stmt){
    header("Location: ../cuenta_paciente/cuenta.php");
}
else{
    header("Location: ../sign_up/signup_paciente.html");
}
?>