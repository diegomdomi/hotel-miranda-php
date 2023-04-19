<?php
$automovil1 = (object)["marca"=>"Toyota","modelo"=>"Corolla"];
$automovil2 = (object)["marca"=>"Hyundai","modelo"=>"Accent"];

function mostrar($automovil){
    echo "<p>Hola soy un $automovil->marca, modelo $automovil->modelo</p>";

}
mostrar($automovil1);
mostrar($automovil2);

echo "<br><br>";

$newArr = array("key1", "key2", "key3");
echo "$newArr[0]";    
?>