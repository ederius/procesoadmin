<?php
include 'inicio.class.php';
/**
* 
*/
class Pin extends Inicio
{
	
	public function guardarPin($cc,$pNombre,$sNombre,$apellido, $pin){
		$nombres=$pNombre." ".$sNombre;
	$query = $this->db->prepare(' INSERT INTO pines values("", '.$cc.', "'.$nombres.'", "'.$apellido.'", "'.$pin.'",now()  ) ');
		$resultado=$query->execute();
		echo $resultado;
	}

	public function consultarUltimoPin(){
		
		$query = $this->db->prepare('select * from pines order by idpines DESC LIMIT 1');
        $query->execute();
        $resultado = $query->fetchAll();
        foreach ($resultado as $nota) {}
        	 return ($nota);
	}



}