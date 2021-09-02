<?php

use Controllers\CourseController;
use Models\Course;

// require_once "Controllers/CourseController.php";
// require_once "Models/Course.php";

spl_autoload_register(function($clase){
    echo $clase."<br>";
    if(file_exists(str_replace("\\","/",$clase).".php")){
        require_once str_replace("\\","/",$clase).".php";
    }
});

$course1 = New Course;
$course1->saludar();

echo "<br>";

$courseC = New CourseController;
$courseC->saludar();

echo "<br>";

// Clases con propiedades o metodos estaticos
class Humano{

    public static $nombre="Aldo";

    public static function saludar(){
        echo "Hola humanos";
    }

    public function saludar2(){
        echo "Hola ".self::$nombre;
    }
}

$humano = New Humano;
// $humano->saludar();

// Humano::saludar();

// echo Humano::$nombre;


// $humano = New Humano;
// $humano->saludar2();


class Argentino extends Humano{

    public static function saludar3(){
        echo "Hola ".parent::$nombre;
    }

}

// $argentino = New Argentino;
// $argentino->saludar3();

// Argentino::saludar3();