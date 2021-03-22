<?php
    $con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
    $tem_id = round($_GET['ids']);
    $city = $_GET['city'];
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
    $sqlOS = "SELECT SO FROM $city WHERE ID_SQL=".$tem_id.";";
    $resultOS = mysqli_query($con,$sqlOS);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Editar</title>
</head>
<body>
    <h3>Editar</h3>
    <form id="data">
    Fecha de carga: <input type="text" name="FechaC"  value="<?php echo implode(mysqli_fetch_assoc($resultFC)); ?>"><br>
    Fecha de entrega: <input type="text" name="FechaE"  value="<?php echo implode(mysqli_fetch_assoc($resultFE)); ?>"><br>
    Operador: <input type="text" name="Operador" value="<?php echo implode(mysqli_fetch_assoc($resultOper)); ?>"><br>
    Placas: <input type="text" name="Placas"  value="<?php echo implode(mysqli_fetch_assoc($resultPlac)); ?>"><br>
    ID: <input type="text" name="ID" value="<?php echo implode(mysqli_fetch_assoc($resultID)); ?>"><br>
    SO: <input type="text" name="SO"  value="<?php echo implode(mysqli_fetch_assoc($resultOS)); ?>"><br>
    Factura: <input type="text" name="Factura"  value="<?php echo implode(mysqli_fetch_assoc($resultFact)); ?>"><br>
    Cliente: <input type="text" name="Cliente"  value="<?php echo implode(mysqli_fetch_assoc($resultCli)); ?>"><br>
    PZS: <input type="text" name="PZS"  value="<?php echo implode(mysqli_fetch_assoc($resultPZS)); ?>"><br>
    Cajas: <input type="text" name="Caja"  value="<?php echo implode(mysqli_fetch_assoc($resultCaja)); ?>"><br>
    Subtotal: <input type="text" name="Subtotal"  value="<?php echo implode(mysqli_fetch_assoc($resultSub)); ?>"><br>
    Horario: <input type="text" name="Horario"  value="<?php echo implode(mysqli_fetch_assoc($resultHor)); ?>">:00<br>
    Direccion: <input type="text" name="Direccion"  value="<?php echo implode(mysqli_fetch_assoc($resultDire)); ?>"><br>
    Destino: <input type="text" name="Destino"  value="<?php echo implode(mysqli_fetch_assoc($resultDest)); ?>"><br>
    Concepto: <input type="text" name="Concepto"  value="<?php echo implode(mysqli_fetch_assoc($resultConce)); ?>"><br>
    Capacidad: <input type="text" name="Capacidad"  value="<?php echo implode(mysqli_fetch_assoc($resultCapa)); ?>"><br>
    Observaciones: <input type="text" name="Observaciones"  value="<?php echo implode(mysqli_fetch_assoc($resultObser)); ?>"><br>
    OE: <input type="text" name="OE"  value="<?php echo implode(mysqli_fetch_assoc($resultOE)); ?>"><br>
    Custodia: <input type="text" name="Custodia"  value="<?php echo implode(mysqli_fetch_assoc($resultCust)); ?>">
    <input type="hidden" name="id" value="<?php echo $tem_id ?>">
    <input type="hidden" name="city" value="<?php echo $city ?>">
    <?php 
    if(implode(mysqli_fetch_assoc($resultFinish)) === "0"){
    ?>
    <input type="submit" value="Guardar">  
    <?php }; 
    ?>
    <a href="../CDMX/"><button type="button">Volver</button></a>  
    <h3 id="res"></h3>
</form>
<script src="editar.js"></script>
<script src="secureacces.js"></script>
</body>
</html>