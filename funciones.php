<?php

#Funciones sin parametros
    function saludo(){
        echo "Hola<br>";
    }
saludo();

#Funciones con parametros
    function despedida($adios){
        echo "<br>".$adios;
    }
$adios = "Adios";
despedida($adios);

#Funciones con retorno
    function retorno($retornar){
        return $retornar;
    }
    echo retorno("Hola")

?>