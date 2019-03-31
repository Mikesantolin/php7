<?php 

$nome = "mike santolin";

echo $nome;

echo "<br>";

//Funcao que deixa tudo em caixa alta dentro da variavel passada
echo strtoupper($nome);


echo "<br>";

//Funcao que deixa tudo em caixa baixa dentro da variavel passada
$nome = strtolower($nome);

echo $nome;

echo "<br>";

//Funcao que deixa Primeira letra de cada palavra maiuscula 
echo ucwords($nome);

echo "<br>";

//Funcao que deixa Primeira letra da variavel maiuscula 
echo ucfirst($nome);

 ?>