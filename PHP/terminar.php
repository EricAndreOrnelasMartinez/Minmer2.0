<?php 
function validation($var){
    return !empty(implode( mysqli_fetch_assoc($var)));
}
$tem_id = $_GET['id'];
$city = $_GET['city'];
$total = 0;
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
$sqlFC = "SELECT FechaC FROM $city WHERE ID_SQL=".$tem_id.";";
$resultFC = mysqli_query($con,$sqlFC);
$sqlFE = "SELECT FechaE FROM $city WHERE ID_SQL=".$tem_id.";";
$resultFE = mysqli_query($con,$sqlFE);
$sqlOper = "SELECT Operador FROM $city WHERE ID_SQL=".$tem_id.";";
$resultOper = mysqli_query($con,$sqlOper);
$sqlPlac = "SELECT Placas FROM $city WHERE ID_SQL=".$tem_id.";";
$resultPlac = mysqli_query($con,$sqlPlac);
$sqlID = "SELECT ID FROM $city WHERE ID_SQL=".$tem_id.";";
$resultID = mysqli_query($con,$sqlID);
$sqlSO = "SELECT SO FROM $city WHERE ID_SQL=".$tem_id.";";
$resultSO = mysqli_query($con,$sqlSO);
$sqlFact = "SELECT Factura FROM $city WHERE ID_SQL=".$tem_id.";";
$resultFact = mysqli_query($con,$sqlFact);
$sqlCli = "SELECT Cliente FROM $city WHERE ID_SQL=".$tem_id.";";
$resultCli = mysqli_query($con,$sqlCli);
$sqlPZS = "SELECT PZS FROM $city WHERE ID_SQL=".$tem_id.";";
$resultPZS = mysqli_query($con,$sqlPZS);
$sqlCaja = "SELECT Caja FROM $city WHERE ID_SQL=".$tem_id.";";
$resultCaja = mysqli_query($con,$sqlCaja);
$sqlSub =  "SELECT Subtotal FROM $city WHERE ID_SQL=".$tem_id.";";
$resultSub = mysqli_query($con,$sqlSub);
$sqlHor = "SELECT Horario FROM $city WHERE ID_SQL=".$tem_id.";";
$resultHor = mysqli_query($con,$sqlHor);
$sqlDire = "SELECT Direccion FROM $city WHERE ID_SQL=".$tem_id.";";
$resultDire = mysqli_query($con,$sqlDire);
$sqlDest =  "SELECT Destino FROM $city WHERE ID_SQL=".$tem_id.";";
$resultDest = mysqli_query($con,$sqlDest);
$sqlConce = "SELECT Concepto FROM $city WHERE ID_SQL=".$tem_id.";";
$resultConce = mysqli_query($con,$sqlConce);
$sqlCapa = "SELECT Capacidad FROM $city WHERE ID_SQL=".$tem_id.";";
$resultCapa = mysqli_query($con,$sqlCapa);
$sqlObser = "SELECT Observaciones FROM $city WHERE ID_SQL=".$tem_id.";";
$resultObser =  mysqli_query($con,$sqlObser);
$sqlOE = "SELECT OE FROM $city WHERE ID_SQL=".$tem_id.";";
$resultOE = mysqli_query($con,$sqlOE);
$sqlCust = "SELECT Custodia FROM $city WHERE ID_SQL=".$tem_id.";";
$resultCust = mysqli_query($con,$sqlCust);
$sqlFinished = "SELECT Terminado FROM $city WHERE ID_SQL=$tem_id";
$resultFinish = mysqli_query($con,$sqlFinished);
if(validation($resultFC)){
    $total = 5;
}
if(validation($resultFE)){
    $total = 10;
}
if(validation($resultOper)){
    $total = 15;
}
if(validation($resultPlac)){
    $total = 20;
}
if(validation($resultID)){
    $total = 25;
}
if(validation($resultSO)){
    $total = 30;
}
if(validation($resultFact)){
    $total = 35;
} 
if(validation($resultCli)){
    $total = 40;
}
if(validation($resultPZS)){
    $total = 45;
}
 if(validation($resultCaja)){
    $total = 50;
}
if(validation($resultSub)){
    $total = 55;
}
if(validation($resultHor)){
    $total = 60;
}
if(validation($resultDire)){
    $total = 65;
}
if(validation($resultDest)){
    $total = 70;
}
if(validation($resultConce)){
    $total = 75;
}
if(validation($resultCapa)){
    $total = 80;
}
if(validation($resultObser)){
    $total = 85;
}
if(validation($resultOE)){
    $total = 90;
}
if(validation($resultCust)){
    $total = 100;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trminar</title>
</head>
<body><div class="main">
    <?php if($total < 100){
        ?>
        <h3>Este proceso no se puede terminar ya que está a:<?php echo $total ?>%, por lo que no se puede terminar</h3>
        <a href="../CDMX/"><button type="button">Volver</button></a>
        <?php
        }else{
            ?>
            <?php if(implode(mysqli_fetch_assoc($resultFinish)) === '0'){ ?> 
            <h3>Este proceso esta completo al: <?php echo $total ?>%. ¿Desea terminarlo?</h3>
            <?php 
           ?>
            <form id="data">
            <input type="email" name="emailC" placeholde="Email del cliente" required>
            <input type="hidden" name="city" value="<?php echo $city?>">
            <input type="hidden" name="id" value="<?php echo $tem_id?>">
            <?php echo implode(mysqli_fetch_assoc($resultFinish)); ?>
            <input type="submit" value="Terminar">
            <a href="../CDMX/"><button type="button">Cancelar</button></a>
            <h3 id="res"></h3>
            </form>
            <?php }else{?>
            <h3>Proceso terminado</h3>
            <a href="../CDMX/"><button type="button">Volver</button></a>
            <?php } ?>
            <?php
        }
        ?></div>
</body>
<script src="finish.js"></script>
<script src="sercureacces.js"></script>
</html>