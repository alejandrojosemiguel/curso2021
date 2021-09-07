<?php
// Paradigmas de programacion: procedural vs POO
// Procedural (
//     codigo poco reutilizable 
//     requiere mayor cantidad de tiempo de pruebas ante cambios de funcionalidad
//     dificulta la programacion en equipo
//     facilita errores de duplicidad de nombres de variables
//     es poco escalable
//     etc
// )

// Asi se veria un codigo procedural
function suma($a=0,$b=0){
 return $a+$b;
}

$calc1 = [
    1,
    2,
    suma(1,2)
];
// var_dump($calc1);
// echo "<br>";


// POO - no pensamos en funciones globales, pensamos en cajas cerradas con propiedades y metodos.
//  Esta forma de pensar apora claridad de lectura
//  desacopla funcionalidades
//  aisla las variables
//  permite corregir partes con la seguridad de no afectar el resto
// CLASE (template)
// INSTANCIA (creacion a partir del template)
// OBJETO (propiedades y metodos independientes de otros objetos similares)

// CLASES
// Para este primer ejemplo vamos a crear una carpeta y un archivo conteniendo las clases, luego lo importamos.
// Para este ejemplo tenemos varias clases en el mismo archivo por facilidad de lectura.
// Esto seria igual a tenerlo declarado en este mismo archivo.
// Convenciones
// Lo normal es que cada clase tenga un archivo independiente.
// La clase y el archivo: mismo nombre, el nombre del archivo y el nombre de la clase inician con la primer letra mayuscula.
require_once("poo/Persona.php");

// Declaro una nueva instancia
$pers1 = new Persona;
// Llamo un metodo
$pers1->setNombre("Pablo");
// Modifico propiedades
$pers1->apellido = "Lopez";
$pers1->edad = "18";
// // Ejemplificar diferencia en entre public, protected y private
// var_dump($pers1);
// echo $pers1->getNombre()."<br>";

// Otra persona
$pers2 = new Persona;
$pers2->nombre = "Fernando";
$pers2->apellido = "Urbieta";
$pers2->edad = "22";
// var_dump($pers2);
// echo $pers2->getNombre()."<br>";

// Acceder a las propiedades de una clase
// echo "El nombre de 1 es : ".$pers1->nombre." y el nombre de 2 es: ".$pers2->nombre."<br>";

// Asignar propiedades directamente en el constructor
$pers3 = New Persona("Aldo","Corbo",40);
// var_dump($pers3);
// echo "El nombre de 3 es : ".$pers3->nombre."<br>";

// HERENCIA
// Aca vamos a crear una instancia de la clase curso. 
// Como esta clase hereda de Persona, en realidad obtenemos: una persona que toma un curso.
// $curso1 = New Curso();
// $curso1->setNombre("Aldo");
// $curso1->materia="PHP";
// echo "curso: ".$curso1->materia.", alumno: ".$curso1->nombre."<br>";

// Aca podemos verificar el ambito de las variables
$micurso1 = New MiCurso();
//  echo "public:".$micurso1->public."<br>";
//  echo "protected:".$micurso1->protected."<br>";
//  echo "private:".$micurso1->private."<br>";
//  $micurso1->printValue();

// Armo una segunda clase qque herede de la anterior para ver las diferencias de acceso a las propiedades y objetos heredados
$micurso2 = New MiCursoPHP();
$micurso2->printValue();

// Si quisiera instanciar directamente la clase abstracta el compilador da error
// $clase1 = New ClaseAbs;

$clase1 = New ClaseNoAbs;
// echo $clase1->getValor()."<br>";
// echo $clase1->valPref(2)."<br>";
// $clase1->imprimir()."<br>";

$curso2 = New Curso2;
echo $curso2->getEmpresa()."<br>";
echo $curso2->saludo()."<br>";


$curso3 = New Curso3;
// echo $curso3->getEmpresa()."<br>";
echo "curso3:".$curso3->saludo()."<br>";