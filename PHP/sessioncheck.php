<?php 

session_start();
if(isset($_SESSION['mail'])){
    echo json_encode('1');
}else{
    echo json_encode('0');
}


?>