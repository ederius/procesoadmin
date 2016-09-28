<?php
include '../class/inicio.class.php';
extract($_POST);
$i = new Inicio();
$i->inicioSesion($usuario, $contra);
