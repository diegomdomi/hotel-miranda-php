<?php
#funciones sin prarámetros

function saludo(){
    echo "hola</br>";
}
saludo();


function despedida($adios){
    echo $adios."<br>";
}
despedida("chao");

#funciones con retorno

function retorno($retornar){
    return $retornar;
}

echo retorno("funcionRetorno");
?>