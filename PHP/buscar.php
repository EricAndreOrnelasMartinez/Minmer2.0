<?php 

$city = $_POST['city'];
$artibute = $_POST['atribute'];
$query = $_POST['query'];
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
$sql = "SELECT * FROM $city WHERE $artibute='$query'";
$ans = mysqli_query($con, $sql);
echo json_encode(mysqli_fetch_all($ans, MYSQLI_ASSOC));

?>