<?php
session_start();

$idMedico = $_POST['idMedico'];
$passMedico = $_POST['passMedico'];
$nombreMedico = $_POST['nombreMedico'];
$telefonoMedico = $_POST['telefonoMedico'];
$especialidad = $_POST['especialidad'];
$correoMedico = $_POST['correoMedico'];

include("../../connect.php");

$sql = "insert into Medico values ('$idMedico', '$passMedico', '$nombreMedico', '$telefonoMedico', '$especialidad', '$correoMedico')";
$stmt = mysqli_query($conn, $sql);

if($stmt){
    header("Location: ../cuenta_admin.php");
}
else{
    echo "El perfil del médico no pudo ser creado.";
    header("refresh:5;url:signup_medico.html");
}
?>