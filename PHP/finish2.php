<?php 
session_start();
$mail = $_SESSION['mail'];
$id = $_POST['id'];
$city = $_POST['city'];
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
$sql = "UPDATE $city SET Terminado=1 WHERE ID_SQL=$id";
$ans = mysqli_query($con,$sql);
$sqlInsert = "INSERT INTO Modifications(Mail,Hour,Day,City,RowN,Description) VALUE('$mail',current_time(),current_date(),'$city',$id,'Terminado');";
$query = mysqli_query($con,$sqlInsert);
if($ans){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>