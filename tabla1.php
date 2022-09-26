<?php
require 'includes/tabla1/mostrar.php';
$usuarios = mostrarTB1();
echo json_encode($usuarios);