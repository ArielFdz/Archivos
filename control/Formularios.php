<?php

include_once './Archivo.php';

$obj = new Archivo();
$obj->setNombreArchivo("../archivo/pruebas.txt");

$accion = empty($_REQUEST["accion"]) ? "" : $_REQUEST["accion"];

if ($accion == "agregar") {
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $pasatiempo = $_REQUEST["pasatiempo"];

    $data = array(
        "nombre" => $nombre,
        "edad" => $edad,
        "pasatiempo" => $pasatiempo
    );

    $obj->GuardarArchivo($data);
}else if ($accion == "editar") {
    
}

    header("location: ./../index.php");
?>