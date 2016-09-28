<?php
/**
* 
*/
class Inicio{



	public $servidor ="localhost";
    public $usuario  ="root";
    public $contra   ="";
    public $tipo     ="mysql";

	public function __construct(){

		        try{
		            $this->db=new PDO('mysql:host=localhost;dbname=procesoadmisiones;','root','');
		        }
		        catch(PDOException $e){
		            echo $e->getMessage();
		        };
		    
	}


	public function inicioSesion($usuario,$contra){

     /*   $query = $this->db->prepare(' select * from usuario where usuario = :usuario ');
        $query->execute(array('usuario'=> $usuario));
        $resultado=$query->fetchAll();
        foreach ($resultado as $row) { }
        if($row['roll']==$tipo && $row['contrasena']==$contra ) {
            session_start();
            $_SESSION['valido']=1;
            $_SESSION['idusuario']=$row['idusuario'];
            $_SESSION['usuario']=$row['usuario'];
            $_SESSION['contrasena']=$row['contrasena'];
            $_SESSION['roll']=$row['roll'];
            $_SESSION['ididentidad']=$row['ididentidad'];

             switch($_SESSION['roll']){
                 case 1:
                     echo 1;
                     break;
                 case 2:
                     echo 2;
                     break;
                 case 3:
                     echo 3;
                     break;
                 case 4:
                     echo 4;
                     break;

             }
            }*/

        if ($usuario=="berlyshappy" and $contra =="berlyshappy") {
            	echo 1;
            	session_start();
                $_SESSION['valido']=1;
            }    
        else{
            echo '<div class="center-aligner red lighten-1 white-text btn">Verifique sus datos</div>'	;
        }

    }



}