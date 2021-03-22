<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>delete</title>
</head>
<body>
    <?php 
    $id = $_GET['id'];
    $city = $_GET['city'];
    ?>
    <div class="main">
    <h3>Puede eliminar registros importantes,¿desea continuar?</h3>
    <a href="./delete2.php?id=<?php echo $id?>&city=<?php echo $city ?>"><button type="button">Continuar</button></a>
    <a href="../CDMX/"><button type="button">Cancelar</button></a>
</body>
</div>
<script src="sercureacces.js"></script>
</html>