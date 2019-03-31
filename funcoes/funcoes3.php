<?php 

function ola($texto, $periodo = "Bom dia"){

	return "Olá $texto! $periodo! <br>";

}

echo ola("Mundo");
echo ola("", "");
echo ola("Mike", "Boa noite");
echo ola("Jessica", "Boa tarde");

 ?>