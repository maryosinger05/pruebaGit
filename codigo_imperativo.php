<?php
#Codigo Imperativo o Espaguetti

$carro1 = (object)["marca"=>"Toyota","modelo"=>"Corolla"];
$carro2 = (object)["marca"=>"Hyundai","modelo"=>"Accent Vision"];

function mostrar($carro) {
    echo "<p>Hola soy un $carro->marca, modelo $carro->modelo</p>";
}

mostrar($carro1);
mostrar($carro2);

?>