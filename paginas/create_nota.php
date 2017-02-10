<?php
session_start();

$nombre =$_GET['nombre'];
$parcial =$_GET['parcial'];
$final =$_GET['final'];
$mejo =$_GET['mejo'];

echo $nombre,$parcial,$final,$mejo;


include_once('../dataBase.php');

include_once("notaCollector.php");
$notaCollectorObj = new notaCollector();
$notaCollectorObj->createNota($nombre,$parcial,$final,$mejo);
echo "Registro Creado<br><br>";  

?>
<br><br><br>
<a href="read_nota.php"> Regresar </a>
