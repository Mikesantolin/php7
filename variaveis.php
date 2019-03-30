<?php 

//$nome = "Hcode";

//echo $nome;

//var_dump($nome);

//boa prática nome variáveis

//$anoNascimento = 1994;

//$nomeCompleto = "Mike Santolin da Silva";

$nome1 = "Mike";

$sobrenome = "Santolin";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;



echo $nome1;

//pula linha
echo "<br/>";

unset($nome1);

if (isset($nome1)) {

	echo $nome1;

}else{

	echo "Variavel foi apagada";

}



?>
