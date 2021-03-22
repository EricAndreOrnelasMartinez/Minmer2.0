<?php 
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
$sql = "SELECT * FROM CUN";
$answere = mysqli_query($con,$sql);
echo json_encode(mysqli_fetch_all($answere, MYSQLI_ASSOC));
?>