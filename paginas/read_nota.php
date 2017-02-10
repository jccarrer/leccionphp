<?php
session_start();
include_once("notaCollector.php");


$id =1;

$notaObj = new notaCollector();



//echo "Usuario : " . $_SESSION['carrera'] . "<br>";
echo "<br><br>";
//echo "<a href='logout.php'>salir</a>";
echo "<br>hola<br>";


foreach ($notaObj->showNota() as $c){
  echo "<div>";
  echo $c->getId() . "  -- " .$c->getNombre() . "  -- " .$c->getParcial(). "  -- " .$c->getFinale(). "  -- " .$c->getMejo();
  echo " ";
  /*echo "<a href='update.php?iddetalles=".$c->getIdDetalles()."&descripcion="  .$c->getDescripcion(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_detallesVideos.php?iddetalles=".$c->getIdDetalles()."'>eliminar</a>";
     */
 echo "</div>"; 
}




echo "<br><br>";
echo " ";
echo "<a href='formulario.php'>Crear</a>";		


?>
