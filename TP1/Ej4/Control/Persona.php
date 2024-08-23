<?php

class Persona{

    public function saludo($datos){
        
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];

        if($edad >= 18){
            $saludo = "Hola, yo soy " . $nombre . " , " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion;
        }elseif($edad < 18 && $edad > 0){
            $saludo = "Hola, yo soy " . $nombre . " , " . $apellido . " soy menor de edad y por eso no te puedo decir mi direccion";
        }else{
            $saludo = "Es imposible que no hayas nacido.";
        }

        

        return $saludo;
        }


}