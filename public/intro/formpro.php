<?php

$nombre = $_REQUEST["nombre"];
$image = $_FILES["image"];

echo $nombre;

var_dump($image);

$path = $_SERVER["DOCUMENT_ROOT"]."/intro/upload/".$image["name"];

move_uploaded_file($image["tmp_name"],$path);