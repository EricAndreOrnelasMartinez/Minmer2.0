<?php 

$mail = $_POST['mail'];
$name = $_POST['name'];
$last = $_POST['last'];
$pass = $_POST['pass1'];
$nivel = $_POST['nivel'];
$aux = intval($nivel);
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
$sql = "INSERT INTO users(Mail,Nombre,Apellido,Contrasena,Nivel) VALUES('$mail','$name','$last','$pass',$aux)";
$res = mysqli_query($con,$sql);
if($res){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>