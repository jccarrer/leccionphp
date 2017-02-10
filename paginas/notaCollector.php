<?php


include_once('nota.php');
include_once('../Collector.php');

class notaCollector extends Collector{
    
    function showNota(){
        $rows = self::$db->getRows("SELECT * FROM nota  order by id"); 
        echo "Detalle de Notas:";
        $nota = array();
        foreach ($rows as $c){
            $aux = new nota($c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejo'},$c{'aprueba'});
      array_push($nota, $aux);        
        }
        return  $nota; 
    }
    
    
    
  function createNota($nombre, $parcial,$final,$mejo) {
    $rows = self::$db->insertRow("INSERT into nota (nombre,parcial,final,mejo) values ('$nombre,'$parcial','$final','$mejo')", null);             
  }
    
    
    
    
    /*
  function deleteDetalleVideos($iddetalles) {
    $rows = self::$db->deleteRow("DELETE FROM detalle_videos where iddetalles = $iddetalles", null);             
  }
    
  function updateDetalleVideos($iddetalle, $descripcion) {
    $rows = self::$db->updateRow("UPDATE  detalle_videos SET descripcion='$descripcion' WHERE iddetalles=$iddetalle", null);             
  }
  
*/    
    
}

?>
