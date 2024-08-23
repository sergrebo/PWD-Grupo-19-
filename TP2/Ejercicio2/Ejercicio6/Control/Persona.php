<?php

class Persona{

    public function saludo($datos){
        
      $deportes = [];

        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];
        $genero = $datos["genero"];
        $estudios = $datos["opcion"];
        

        $cantDeportes = $this->contarDeportes($datos);

        if($edad >= 18){
            $saludo = "Hola, yo soy " . $nombre . "  " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion .  "<br>" . $estudios . "<br>" . "Genero: " . $genero . "<br>" . " Cantidad de deportes que practica: " . $cantDeportes;
        }elseif($edad < 18 && $edad > 0){
            $saludo = "Hola, yo soy " . $nombre . " , " . $apellido . " soy menor de edad y por eso no te puedo dar mis datos";
        }else{
            $saludo = "Es imposible que no hayas nacido.";
        }

        

        return $saludo;
        }
        


        public function contarDeportes($arreglo){
          $deportes = [
              'futbol',
              'basket',
              'tenis',
              'voley'
          ];
          $practicados = array_intersect($deportes, $arreglo);
          $cantPracticados = count($practicados);
          
          return $cantPracticados;
      }

        public function validarCadena($cadena)
        {
          $respuesta = true;
          while (empty($cadena) || !preg_match('/^[a-zA-Z ]+$/', $cadena)) {
            $respuesta = false;
          }
          return $respuesta;
        }
      
        public function validarEdad($edad){
          $respuesta = true;
          if (!$this->validarEnteroPositivo($edad) || $edad > 123) {
            $respuesta = false;
          }
          return $respuesta;
        }
      
        public function validarEnteroPositivo($numero){
          $respuesta = true;
          while($numero <= 0 || !ctype_digit($numero)){
            $respuesta = false;
          }
        return $respuesta;
        }

}