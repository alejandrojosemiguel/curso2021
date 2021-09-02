<?php

// NameSpace
// Organizar y dividir el codigo en distintos archivos y carpetas.
// En el caso de que se de que una clase se repite con el mismo nombre y distinta duncionalidad no colicionan
// se importan los archivos de clases, normalmente serian distintas clases pero aca
// intencionalemente vamos a repetir el mismo nombre y distinta funcionalidad 
// aca carpeta 1 y 2 hacen referencia al nombre de la carpeta 
require_once("Carpeta1/Persona.php");
require_once("Carpeta2/Persona.php");

// Podriamos referenciar la clase anteponiendo el correspondiente nameespace.
// aca carpeta 1 y 2 hacen referencia al nombre del namespace 
// $humano1 = New Carpeta1\Persona;
// $humano1->saludo();

// $humano2 = New Carpeta2\Persona;
// $humano2->saludo();

// Esto seria similar a lo anterior sin necesidad de refenciar los namespace en cada nueva instancia
use Carpeta1\Persona;
use Carpeta2\Persona as Persona2;

$humano1 = New Persona;
$humano1->saludo();

$humano2 = New Persona2;
$humano2->saludo();
