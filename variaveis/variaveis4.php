<?php 


$nome = "Mike";

function teste() {

	//Puxando variavel que esta fora da funcao
	global $nome;
	echo $nome;

}

function teste2() {

	//Defininco variavel dentro da funcao
	$nome = "Jessica";
	echo $nome . " agora no teste 2";

}

//chamando funcoes
teste();
teste2();

?>