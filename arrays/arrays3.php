<?php 

$pessoas = array(); 

array_push($pessoas, array(
	'nome'=>'Mike',
	'idade'=>24
));

array_push($pessoas, array(
	'nome'=>'Jessica',
	'idade'=>23
));

print_r($pessoas[0]['nome']);

?>