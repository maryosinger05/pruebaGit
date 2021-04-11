<?php
#variable de tipo numerica
$numero = 5;
echo "Esto es una variable numerica: $numero<br>";
var_dump($numero);
echo "<br><br>";

#variable de tipo texto
$palabra = "Hola";
echo "Esto es una variable de tipo texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";


#variable de tipo float
$float = 5.5;
echo "Esto es una variable de tipo float: $float<br>";
var_dump($float);
echo "<br><br>";

#variable de tipo boleana
$boleana = true;
echo "Esto es una variable de tipo boleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

#variable de tipo arreglo
$colores = array("Rojo","Azul","Amarillo");
echo "Esto es una variable de tipo arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";

#variable de tipo arreglo con propiedades
$frutas = array("fruta1"=>"Manzana","fruta2"=>"Fresa","fruta3"=>"Pera");
echo "Esto es una variable de tipo arreglo con propiedades: $frutas[fruta2]<br>";
var_dump($frutas);
echo "<br><br>";

#variable de tipo objeto
$verduras = (object)["verdura1"=>"Calabacin","verdura2"=>"Esparragos","verdura3"=>"Cebolla"];
echo "Esto es una variable de tipo objeto: $verduras->verdura3<br>";
var_dump($verduras);
echo "<br><br>";
?>