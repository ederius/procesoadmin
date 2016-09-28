<?php
include 'inicio.class.php';
/**
* 
*/
class Pin extends Inicio
{
	
	public function guardarPin($cc,$pNombre,$sNombre,$apellido){
		$nombres=$pNombre." ".$sNombre;
	$query = $this->db->prepare(' INSERT INTO pines values("", '.$cc.', "'.$nombres.'", "'.$apellido.'", now()  ) ');
		$query->execute();
	}
}