<?php

class nota{
    private $id;
    private $nombre;
    private $parcial;
    private $finale;
    private $mejo;
    private $aprueba;


    function __construct($id,$nombre, $parcial, $finale, $mejo, $aprueba){
        $this->id = $id;
        $this->nombre = $nombre;
	$this->parcial=$parcial;
	$this->finale=$finale;
	$this->mejo=$mejo;
	$this->aprueba=$aprueba;
          
    }
    
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     }     
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }     

     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     }   
    


     function setFinale($finale){
       $this->finale = $finale;
     } 
     function getFinale(){
       return $this->finale;
     }

     function setMejo($mejo){
       $this->mejo = $mejo;
     } 
     function getMejo(){
       return $this->mejo;
     }


     function setAprueba($aprueba){
       $this->aprueba = $aprueba;
     } 
     function getAprueba(){
       return $this->aprueba;
     }

    
}



?>
