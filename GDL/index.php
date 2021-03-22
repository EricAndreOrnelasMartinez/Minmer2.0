<?php 
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/cssforcitys.css">
    <title>GDL</title>
</head>
<body>
    <header>
    <nav class="menu">
        <ul id="menu">
            <?php
            session_start();
            $aux = $_SESSION['nivel'];
            if($aux >= 5){
                ?>
                <li><a href="../CDMX/">CDMX</a></li>
                <li><a href="../GDL/">GDL</a></li>
                <li><a href="../MTY/">MTY</a></li>
                <li><a href="../CUN/">CUN</a></li>
                <li><a href="../SJD/">SJD</a></li>
                <li><a href="../QRO/">QRO</a></li>
                <li><a href="../logout.php">Log out</a></li>
                <li><a href="../Buscar/">Buscar</a></li>
                <li><a href="../Newuser/">Nuevo usuario</a></li>
                <li><a href="../Modificaciones/">Modificaciones</a></li>
                <?php
            }else if($aux <= 5 && $aux >= 3){
                ?>
                <li><a href="../CDMX/">CDMX</a></li>
                <li><a href="../GDL/">GDL</a></li>
                <li><a href="../MTY/">MTY</a></li>
                <li><a href="../CUN/">CUN</a></li>
                <li><a href="../SJD/">SJD</a></li>
                <li><a href="../QRO/">QRO</a></li>
                <li><a href="../logout.php">Log out</a></li>
                <li><a href="../Buscar/">Buscar</a></li>
                <?php
            }else{
                header("Location:../Buscar/");
            }
            ?>
        </ul>
    </nav>
    </header>
    <section>
    <table id="main">
        <thead>
            <tr>
                <td>ID SQL</td>
                <td>Fecha de carga</td>
                <td>Fecha de entrega</td>
                <td>Operador</td>
                <td>Placas</td>
                <td>ID</td>
                <td>SO</td>
                <td>Factura</td>
                <td>Cliente</td>
                <td>PZS</td>
                <td>Cajas</td>
                <td>Subtotal</td>
                <td>Horario</td>
                <td>Dirección</td>
                <td>Destino</td>
                <td>Concepto</td>
                <td>Capacidad</td>
                <td>Observaciones</td>
                <td>OE</td>
                <td>Custodia</td>
                <td>Terminado</td>
                <?php session_start();
                $aux = $_SESSION['nivel'];
                if($aux >= 5){
                    ?>
                    <td><a href="../Nuevo/"><button type="button">Nuevo</button></a></td>
                    <?php
                }
                ?>
                <td>-</td>
                <td>-</td>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM GDL";
        $ans = mysqli_query($con,$sql);
        while($show = mysqli_fetch_array($ans)){
        ?>
        <tr>
            <td><?php echo $show['ID_SQL'] ?></td>
            <td><?php echo $show['FechaC'] ?></td>
            <td><?php echo $show['FechaE'] ?></td>
            <td><?php echo $show['Operador'] ?></td>
            <td><?php echo $show['Placas'] ?></td>
            <td><?php echo $show['ID'] ?></td>
            <td><?php echo $show['SO'] ?></td>
            <td><?php echo $show['Factura'] ?></td>
            <td><?php echo $show['Cliente'] ?></td>
            <td><?php echo $show['PZS'] ?></td>
            <td><?php echo $show['Caja'] ?></td>
            <td><?php echo $show['Subtotal'] ?></td>
            <td><?php echo $show['Horario'].':00' ?></td>
            <td><?php echo $show['Direccion'] ?></td>
            <td><?php echo $show['Destino'] ?></td>
            <td><?php echo $show['Concepto'] ?></td>
            <td><?php echo $show['Capacidad'] ?></td>
            <td><?php echo $show['Observaciones'] ?></td>
            <td><?php echo $show['OE'] ?></td>
            <td><?php echo $show['Custodia'] ?></td>
            <td><?php echo $show['Terminado']?></td>
            <?php
            $aux = $_SESSION['nivel'];
            if($aux == 5 || $aux == 6){ 
            ?>
             <td><a href="../Editar/?ids=<?php echo $show['ID_SQL']; ?>&city=GDL"><button type="button" class="btn btn-succes">Modificar</button></a></td>
             <td><a href="../PHP/delete.php?id=<?php echo $show['ID_SQL'] ?>&city=GDL"><button type="button">Eliminar</button></a></td>
             <td><a href="../PHP/terminar.php?id=<?php echo $show['ID_SQL'] ?>&city=GDL"><button type="button">Terminar</button></a></td>
            <?php
            }else{
                continue;
            }
            ?>
        </tr>
        <?php }?>
    </table>
    </section>
</body>
<script src="gdl.js"></script>
<script src="secureacces.js"></script>
</html>