<?php

#Variable número
$numero = 5;
echo "esto es un número dentro de una cadena de texto: $numero</br>";
var_dump($numero);
echo "<br></br>";
 
#variable string
$string = "string";
echo "Esto es una variable string $string</br>";
var_dump($string);

#variable boolean

echo "<br></br>";
$boolean = true;
echo "esto es boolean igual a $boolean</br>";
var_dump($boolean);

#variable array

$colors= array("rojo","azul");
echo "<br></br>";

echo "esto es array : $colors[0]</br>";
var_dump($colors);

echo "<br></br>";

# Array con Propiedades
$veggy = array("veggy1"=>"tomate","veggy2"=>"zanahoria");
echo "esto es variable array con propiedades $veggy[veggy1]</br>";
var_dump($veggy);

echo "<br></br>";

#variables objeto

$frutas = (object)["fruta1"=>"peras","fruta2"=>"manzana"];
echo "esto es variable de objetos: $frutas->fruta1</br>";
var_dump($frutas);
?>