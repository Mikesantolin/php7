<?php 

//Include tenta funcionar mesmo se o arquivo não exista ou esteja com erro, não nescessáriamente evitando o funcionamento, além disso pode conter mais recursos, pode acessar include path e include dinamico(url), porem este ultimo pode ser uma pessima pratica
//include_once "include1.php";

//Require obriga a inclusão do arquivo e que ele esteja correto, caso contrário retorna erro fatal
require_once "include1.php";


$c = 10;
$d = 20;

$resultado = somar($c, $d);

echo $resultado;

 ?>