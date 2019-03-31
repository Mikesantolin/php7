<?php 

$a = 55.0;
$b = 55;

//Mostra os TIPOS de variavel , ex: string, int, float, boolean.
//var_dump($a);
//var_dump($b);


echo "Valor de A: " . $a . " e o Valor de B: " . $b;

echo "<br>";

echo "A é maior que B?";
var_dump($a > $b);

echo "<br>";

echo "A é menor que B?";
var_dump($a < $b);

echo "<br>";

//Compara valor
echo "A tem mesmo valor que B? ";
var_dump($a == $b);

echo "<br>";

//Compara valor e tipo
echo "A tem mesmo valor ou tipo que B? ";
var_dump($a === $b);

echo "<br>";

echo "A e B tem valores diferentes? ";
var_dump($a != $b);

echo "<br>";

echo "A e B tem valores ou tipos diferentes? ";
var_dump($a !== $b);

 ?>