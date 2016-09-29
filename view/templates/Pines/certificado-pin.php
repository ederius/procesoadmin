<?php
session_start();
error_reporting(E_ALL);
header("Content-Type: text/html;charset=utf-8");
extract($_REQUEST);
require_once("../../lib/dompdf/dompdf_config.inc.php");
include '../../../model/class/pin.class.php';
$p=new Pin();
$pin=$p->consultarUltimoPin();


$codigo = '


<html>
<head>
<title></title>
    <link href="../../css/styleCertificado.css"  rel="stylesheet" type="text/css">

</head>
<body>

    <div class="container">
    <h1 class="pin">'.$pin["pin"].'</h1>
    <div class="nombre">'.strtoupper ($pin["nombresAsp"]).' '.strtoupper ($pin["apellidoAsp"]).' </div>
    <div class="cc"> C.C: '.$pin["cc"].' </div>
    <div class="instrucciones"> <p  class="titulo">Instrucciones</p></div>        
    <div class="descripcion"> Se debe ingresar a la pagina <a href="http://app.happykids.edu.co">http://app.happykids.edu.co</a>, luego se inserta el codigo obtenido para validarlo y empezar a diligenciar el formulario de inscripci&oacute;n.<br>
    '.$pin["fecha"].'
    </div>        

    </div>
</body>
</html>


';


$dompdf = new DOMPDF();
$dompdf->load_html($codigo);
$dompdf->render();
$dompdf->stream("Codigo para ".$pin["nombresAsp"]." ".$pin["apellidoAsp"]." ".$pin["fecha"].".pdf");

