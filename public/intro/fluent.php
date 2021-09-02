<?php

class Persona {

    public $nombre, $apellido, $dni;

    public function __construct($nombre=null, $apellido=null, $dni=null){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    public function setNombre($a){
        $this->nombre = strtolower($a);
        return $this;
    }
    public function setApellido($a){
        $this->apellido = strtolower($a);
        return $this;
    }
    public function setDni($a){
        $this->dni = strtolower($a);
        return $this;
    }

    public function imprimir(){
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "DNI: ".$this->dni."<br>";
    }
}

$pers1 = new Persona;
$pers1->setNombre("Nombre1")->setDni("18123123")->setApellido("Apellido1")->imprimir();

 // Novedades de PHP 8
 // definir en el mismo constructor ahorra sintaxis
 class Persona2 {
    // public $nombre, $apellido, $dni;

    public function __construct(public $nombre=null, public $apellido=null, public $dni=null){
        // $this->nombre = $nombre;
        // $this->apellido = $apellido;
        // $this->dni = $dni;
    }

    public function setNombre($a){
        $this->nombre = strtolower($a);
        return $this;
    }
    public function setApellido($a){
        $this->apellido = strtolower($a);
        return $this;
    }
    public function setDni($a){
        $this->dni = strtolower($a);
        return $this;
    }
    public function imprimir(){
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "DNI: ".$this->dni."<br>";
    }
}

echo "<br>";

$pers2 = new Persona2(apellido:"Apellido2",dni:"18123123");
$pers2->imprimir();


























