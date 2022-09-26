<?php
require 'includes/tabla2/mostrar.php';
$usuarios = mostrarTB2();
echo json_encode($usuarios);