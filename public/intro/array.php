<?php

$curso = "Laravel";
// echo $curso;

$curso = 'Laravel 2021';
// echo $curso."<br>";

// ctrl + } comentar y descomentar

$dia1="Intro a PHP del curso \"1\" ".$curso."<br>";
// echo $dia1."<br>";

$numero = 123.12;

$cadena=<<<INI
texto 
de prueba
multilinea
otra linea

INI;

// echo $cadena."<br>";

$bool = false;
// echo $bool."<br>";

$a=1;
$b=2;
$c=$a+$b;
$d=$a%$b;

// echo $c."<br>";
// echo $d."<br>";

$aa = 4;
$bb = $aa++;
// echo $bb."<br>";


//match

//match
$match = match($a){
    1 => "si<br>",
    2 => "no<br>",
    default => "otro<br>"
};

// echo $match."<br>";

// Foreach
// $name=["Ale","Tito","Mai","Lau"];
// $name=[0 => "Ale",1 => "Tito",2 => "Mai",3 => "Lau"];
// $name=["0" => "Ale","1" => "Tito","2" => "Mai","3" => "Lau"];
 $name=["A0" => "Ale","B1" => "Tito","C2" => "Mai","D3" => ["Ale","Tito","Mai","Lau"]];
//  var_dump($name);
foreach($name as $key=>$value){
    // echo "nombre: ".$value." (key:".$key.")<br>";
}

// FUNCIONES
$a=10;
$b=8;
$c=0;
$d=3;

//echo "<br>";
function funct(&$d,$e=null,$f=null){

    global $a, $b;
    
    $a -= 5;
    // echo $a." - ".$b." - ".$d." - ".$e."<br>";

    $c=$a+$b;    

    $d=$f;
    // echo $d."<br>";
}

funct($d,f : 5);
// echo $d."<br>";
// echo $a." - ".$b." - ".$c."<br>";



// Fechas
$numHoy=time();
//echo date("d/m/Y H:i:s", $numHoy);

$hoy=getdate($numHoy);
// var_dump($hoy);
//echo date("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));
// echo gmdate("d/m/Y H:i:s", mktime(22, 30, 15, 3, 11, 2012));


// Funciones de cadena 
$cadena = "Mi código de prueba";
$l = strlen($cadena); #bytes
$c = mb_strlen($cadena); #caracteres
//echo $cadena[1]."(".$l.")"."(".$c.")<br>";
echo str_replace("Mi","Tu",$cadena)."<br>";

$p = stripos($cadena,"I");
//echo "(".$p.")<br>";

if(str_starts_with($cadena,"Mi")){
    //echo "Si<br>";
}

// ARRAY
// Datos del mismo tipo

$array = [11,13,17,19,23];
$array[7] = 31;
// echo $array[5];

// Distintos tipos
$array2 = [13,15,"texto","mail"=>"asd@asd.com"];

// echo $array2["mail"];

$data = [
    [
        "nombre" => "Alejandro",
        "mail" => "asd@asd.com",
        "telefono" => [
            "celular" => "1168307920"
        ]        
    ],
    [
        "nombre" => "AlejandPedroro",
        "mail" => "pedro@asd.com"
    ],
    [
        "nombre" => "Juan",
        "mail" => "juan@asd.com"
    ]
];

// echo $data[0]["telefono"]["celular"];   

// array a variables discretas
$array = [1,2,3,4];

list($a,$b,$c,$d) = $array;

//  echo $c;

// llenar array por rango
$array = range(10,20);
// echo $array[5];

// Buscar por valor
// $array = ['Ale','Pepe','Carlos','Jose'];
// $array = ['Ale'=>12,'Pepe'=>14,'Carlos'=>16,'Jose'=>18];

// if(in_array(12,$array)){
//     echo "existe";
// }else{
//     echo "no existe";
// }

// Buscar por clave
// $array = ['Ale'=>12,'Pepe'=>14,'Carlos'=>16,'Jose'=>18];

// if(array_key_exists('Ale',$array)){
//     echo "existe";
// }else{
//     echo "no existe";
// }

?>