<?php

class ControlPelicula {

    private function subirImagen($datos) {
        $dir = './Img/';
        $estadoImagen = "";
        $tipoPermitido = ['image/jpeg', 'image/png', 'image/gif'];
    
        // Verificar si se subió un archivo
        if ($datos['imagen']['error'] > 0) {
            $estadoImagen = -2; // Error: No se pudo acceder al archivo temporal.
        }
        // Verificar tipo de archivo
        elseif (!in_array($datos['imagen']['type'], $tipoPermitido)) {
            $estadoImagen = -1; // Error: Tipo de archivo no permitido.
        }
        // Intentar copiar el archivo al directorio especificado
        elseif (!copy($datos['imagen']['tmp_name'], $dir . $datos['imagen']['name'])) {
            $estadoImagen = 0; // Error: No se pudo copiar el archivo al directorio de destino.
        } 
        else {
            $estadoImagen = 1; // Éxito: El archivo se ha copiado correctamente.
        }
    
        return ['estado' => $estadoImagen, 'nombreArchivo' => $datos['imagen']['name']];
    }

    public function mostrarDetallePelicula($datos) {
        
        $clavesEsperadas = [
            'titulo' => '',
            'actores' => '',
            'director' => '',
            'guion' => '',
            'produccion' => '',
            'anio' => '',
            'nacionalidad' => '',
            'genero' => '',
            'duracion' => '',
            'restricciones' => '',
            'sinopsis' => '',
            'imagen' => ''
        ];

        $arregloDetalle = [];

        foreach ($clavesEsperadas as $clave => $valorPorDefecto) {
            if ($clave == 'imagen' && isset($datos['imagen'])) {
                $resultadoImagen = $this->subirImagen($datos);
                if ($resultadoImagen['estado'] == 1) {
                    $arregloDetalle['imagen'] = $resultadoImagen['nombreArchivo'];
                } else {
                    $arregloDetalle['imagen'] = ''; 
                }
            } else {
                $arregloDetalle[$clave] = isset($datos[$clave]) ? $datos[$clave] : $valorPorDefecto;
            }
        }

        return $arregloDetalle;
    }


}


?>