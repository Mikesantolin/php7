<?php 

function ola(){

	$argumentos = func_get_args();

	return $argumentos;

}

var_dump(ola("Bom dia", 10, 10.5, true));

 ?>