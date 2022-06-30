<?php

class Archivo {

    private $NOMBRE_ARCHIVO = "./archivo/pruebas.txt";
    private $SEPARADOR = ",";

    function setNombreArchivo($ruta) {
        $this->NOMBRE_ARCHIVO = $ruta;
    }

    function CargarArchivo() {
        $pruebas = array();
        if (file_exists($this->NOMBRE_ARCHIVO)) {
            $archivo = fopen($this->NOMBRE_ARCHIVO, "r");

            while (!feof($archivo)) {
                $linea = fgets($archivo);
                if (!empty($linea)) {
                    $data = explode($this->SEPARADOR, $linea);

                    $pruebas[] = array(
                        "nombre" => $data[0],
                        "edad" => $data[1],
                        "pasatiempo" => $data[2]
                    );
                }
            }
            fclose($archivo);
        }

        return $pruebas;
    }

    function GuardarArchivo($data) {
        $archivo = fopen($this->NOMBRE_ARCHIVO, "a");
        $linea = $this->getLinea($data) . "\r\n";

        fwrite($archivo, $linea);
        fclose($archivo);
    }

    function EditarArchivo($array) {
        
    }

    function getLinea($data) {
        return $data["nombre"] . $this->SEPARADOR . $data["edad"] . $this->SEPARADOR . $data["pasatiempo"];
    }

}

?>
