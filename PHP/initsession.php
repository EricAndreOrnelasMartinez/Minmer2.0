<?php 

$mail = $_POST['mail'];
$pass = $_POST['pass'];
if(!empty($mail) && !empty($pass)){
    $con = mysqli_connect('localhost','root','','minmer');
    $sqlcon = "SELECT Contrasena FROM users WHERE Nombre='$mail'";
    $rescon = mysqli_query($con,$sqlcon);
    if($rescon){
        if($pass === implode(mysqli_fetch_assoc($rescon))){
            session_start();
            $sqlnivel = "SELECT Nivel FROM users WHERE Nombre='$mail'";
            $resnivel = mysqli_query($con, $sqlnivel);
            $_SESSION['nivel'] = implode(mysqli_fetch_assoc($resnivel));
            $_SESSION['mail'] = $mail;
            echo json_encode('1');
        }else{
            echo json_encode('0');
        }
    }else{
        echo json_encode('0');
    }
}else{
    echo json_encode('2');
}


?>