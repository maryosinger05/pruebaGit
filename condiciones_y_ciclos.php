<?php
#Condiciona 
$a = 10;
$b = 11;

if ($a > $b) {
    echo "a es mayor que b";
}

else if ($a == $b) {
    echo "a es igual a b";
}

else {
    echo "a es menor que b";
}

echo "<br><br>";

#swicth
$dia = "sabado";

switch($dia) {
    case 'sabado':
        echo "Voy a estudiar PHP";
    break;
    case 'viernes':
        echo "Voy a jugar todo el dia";
    break;
    case 'viernes':
        echo "Voy a ir a la casa de maria";
    break;

    default:
    echo "Voy al IUTY";
}

echo "<br><br>";

#while
$n = 0;

while($n < 5) {
    $n++;
    echo $n;
}

echo "<br><br>";

#do while
$s = 1;

do {
    echo $s;
    $s++;
}while($s <= 5);

echo "<br><br>";

#for

for($i = 0; $i <= 5; $i++) {
    echo $i;
}

echo "<br><br>";

?>