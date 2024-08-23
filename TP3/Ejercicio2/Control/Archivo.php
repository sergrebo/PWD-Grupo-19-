<?php

class Archivo {
    
    private $dir;

    public function __construct()
    {
        $this->dir = "../../Archivos";
    }

    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir)
    {
        $this->dir = $dir;
    }


    public function subirArchivo($datos) {
        $estadoArchivo = "";
        $tipoPermitido = 'text/plain';
        $contenidoArchivo = null;
    
        // Verificar si hay un error en la carga del archivo
        if ($datos['miArchivo']['error'] > 0) {
            $estadoArchivo = -3; // Error: No se pudo acceder al archivo temporal.
        } 
        // Validar tipo de archivo
        elseif ($datos['miArchivo']['type'] != $tipoPermitido) {
            $estadoArchivo = -2; // Error: Tipo de archivo no permitido.
        } 
        // Copiar archivo al directorio
        else {
            if (!copy($datos['miArchivo']['tmp_name'], $this->getDir() . "/" . $datos['miArchivo']['name'])) {
                $estadoArchivo = -1; // Error: No se pudo copiar el archivo al directorio.
            } 
            // Leer el contenido del archivo si la copia fue exitosa
            else {
                $contenidoArchivo = file_get_contents($this->getDir() . "/" . $datos['miArchivo']['name']);
                if ($contenidoArchivo === false) {
                    $estadoArchivo = 0; // Error: No se pudo leer el archivo.
                } else {
                    $estadoArchivo = 1; // Éxito: El archivo se ha copiado y leído con éxito.
                }
            }
        }
    
        return ['estado' => $estadoArchivo, 'contenido' => $contenidoArchivo];
    }
    
    
    

}

?>