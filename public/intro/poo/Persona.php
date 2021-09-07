<?php

class Persona {

    public $nombre, $apellido, $edad;
    // private $edad;

    // variables no obligatorias
    public function __construct($a="",$b="",$c=""){
        // $this->nombre = $a;
        $this->setNombre($a);
        $this->apellido = $b;
        $this->edad = $c;
    }

    public function setNombre($aa){
        $this->nombre = strtolower($aa);
    }

    public function getNombre(){
        return ucfirst($this->nombre);
    }
}

// Extender clase - en php solo se permite extender una unica vez cada clase
class Curso extends Persona {

    public $materia,$turno;

    // sobreescribir metodo - Este metodo existe en la clase padre, aca lo pisamos
    public function setNombre($a){
        $this->nombre = $a;

        // extender metodo - Se referencia a la llamada del metodo padre 
        // como en el constructor del padre hay un llamado al metodo setNombre este ejecutara cuando se instancie Curso
        $b=parent::getNombre();
        echo "Clase Curso -> el nombre es: ".$b."<br>";
    }

}

// Encapsulamiento - todas las propiedades y metodos que solo pertenecen a la clase se pueden aislar del resto.
class MiCurso {

    public $public = "public";
    protected $protected = "Protected";
    private $private = "private";

    // si no asigno un ambito del metodo por defecto es public
    function printValue(){
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private."<br>";
    }
}    

class MiCursoPHP extends MiCurso {

    // reemplazar varibles y metodo alcance de variables
    public $public = "public 2";
    public $protected = "protected 2";

    function printValue(){
        echo $this->public."<br>";
        // se puede acceder por herencia pero no desde fuera de la clase 
        echo $this->protected."<br>";
        // esta variable por ser privada de la clase padre es inaccesible por herencia, lo mismo ocurriria con un metodo.
        //echo $this->private."<br>";
    }    
}


// Intefaces - Plantilla con propiedades y metodos para distintas clases
// El uso de este recurso esta reservado para los analistas, diseñadores y jefes de desarrollo.
// Aplican como restricciones para que el desarrollador complete despues
interface iTemplate{
    public function setVariable($name, $value);
    public function getVariable($name);   
}

// clase que implemena la interface previa
class Template implements iTemplate{

    public function setVariable($names,$values){

    }
    public function getVariable($name){

    }
}

// otra interface 
interface A{

    public function prueba();

}

// Extender interface
interface B extends A{

    public function prueba2();

}

interface C extends A,B{

    public function prueba3();

}

// La clase se implementa desde la interfaz A
class Ca implements A{

    public function prueba(){

    }
}

// La clase se implementa desde la interfaz A que extiende a interfaz B
class Cb implements B{

    public function prueba(){

    }
    public function prueba2(){

    }
}

// La clase se implementa desde la interfaz C que extiende de A y B
class Cc implements C{

    public function prueba(){

    }

    public function prueba2(){

    }      
    
    public function prueba3(){

    }   

    // adicional a las del template (no es problema)
    public function prueba4(){

    }   
}


// Clases abstractas
// Permiten definir metodos en concreto y metodos no publicos. Por lo demas es similar a interfaces
abstract class ClaseAbs{
    // para cada metodo que definamos tenemos que agregar abstract, esto declara un metodo que obligatoriamente
    // tienen que tener las clases que se hereden de esta
    abstract protected function getValor();
    abstract protected function valPref($value);

    public function imprimir(){
        echo $this->getValor();
    }
}

// Las clases absractas no se pueden instanciar directamente, solo se pueden exender desde otra clase
class ClaseNoAbs extends ClaseAbs{
    public function getValor(){
        return "valor1";
    }

    public function valPref($value){
        return "valor:".$value;
    }
}

// Traits (caracteristicas)
// En PHP la herencia es simple no se puede hacer multiple, pero se puede simular mediante trait
// los trait no se pueden instanciar, solo permiten extender propiedades y metodos de una clase
class Persona2 {
    public $nombre, $apellido, $edad;

    public function __construct($a="",$b="",$c=""){
        $this->nombre = $a;
        $this->apellido = $b;
        $this->edad = $c;
    }

    public function setNombre($a){
        $this->nombre = strtolower($a);
    }

    public function getNombre(){
        return ucfirst($this->nombre);
    }

    public function saludo(){
        echo "Hola persona2";
    }
}

//Herencia multiple
trait MiEmpresa{

    public $empresa="La caja";

    public function getEmpresa(){
        return ucwords($this->empresa);
    }
    // Pisa el metodo de la clase padre
    public function saludo(){
        echo "Hola trait";
    }

}

// Extender clase
class Curso2 extends Persona2 {

    use MiEmpresa {
        MiEmpresa::saludo as public;
        MiEmpresa::getEmpresa as public;
    }

    public $materia,$turno;

    // sobreescribir metodo
    public function setNombre($a){
        $this->nombre = $a;

        // extender metodo
        $b=parent::getNombre();
        echo "el nombre es: ".$b."<br>";
    }
    // Precedencia clase padre, trait, clase hija
    // public function saludo(){
    //     echo "Hola Curso2";
    // }

}

class Curso3 extends Curso2 {

    public $materia,$turno;

    // sobreescribir metodo
    public function setNombre($a){
        $this->nombre = $a;

        // extender metodo
        $b=parent::getNombre();
        echo "el nombre es: ".$b."<br>";
    }
    // Precedencia clase padre, trait, clase hija
    // public function saludo(){
    //     echo "Hola Curso3";
    // }

}