<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Edad=$_POST['Edad'];
$Correo=$_POST['Correo'];
$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
$Region=$_POST['Region'];

$sql="INSERT INTO persona VALUES('$Nombre','$Apellidos','$Edad','$Correo','$Fecha_nacimiento','$Region')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: persona.php");
    
}else {
}
?>
