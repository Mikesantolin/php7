<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

//Funcao que busca palavra em um texto (que esta dentro de alguma variavel)
$q = strpos($frase, $palavra);

//Funcao que busca e imprime parte do texto, no caso do 0 até onde a variavel $q buscou anteriormente.
$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);

 ?>