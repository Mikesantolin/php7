<?php 

$condicao = true;

while ($condicao) {

	$numero = rand(1, 10);
	echo "<br>";

	if ($numero === 3) {

		echo "Três!";
		$condicao = false;
		break;

	}

	echo $numero . " ";
	
}



 ?>