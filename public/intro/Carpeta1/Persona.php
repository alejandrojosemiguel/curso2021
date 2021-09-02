<?php

namespace Carpeta1;

class Persona {
    public $nombre, $apellido, $edad;

    public function __construct($a="",$b="",$c=""){
        $this->nombre = $this->setNombre($a);
        $this->apellido = $this->setNombre($b);
        $this->edad = $c;
    }

    public function setNombre($a){
        $this->nombre = strtolower($a);
    }

    public function getNombre(){
        return ucfirst($this->nombre);
    }

    public function saludo(){
        echo "dentro de la carpeta 1<br>";
    }
}
