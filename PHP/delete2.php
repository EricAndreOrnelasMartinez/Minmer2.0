<?php 
session_start();
$mail = $_SESSION['mail'];
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
$id = $_GET['id'];
$city = $_GET['city'];
$sql = "DELETE FROM $city WHERE ID_SQL=$id";
$response = mysqli_query($con,$sql) or die(mysqli_error($con));
$sqlInsert = "INSERT INTO Modifications(Mail,Hour,Day,City,RowN,Description) VALUE('$mail',current_time(),current_date(),'$city',$id,'Eliminado');";
$query = mysqli_query($con,$sqlInsert);
header("Location:../CDMX/");
?>