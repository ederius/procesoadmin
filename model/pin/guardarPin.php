<?php

include '../class/pin.class.php';
extract($_POST);
$p = new Pin();
$pin = 'sfsfgfg';
$p->guardarPin($cc,$pNombre,$sNombre,$apellido,$pin);