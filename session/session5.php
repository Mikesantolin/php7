<?php 

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch (session_status()) {

	case '2':
		echo "usuario ATIVO";
		break;

	case '0':
	echo "usuario inativo";
	break;

	case '1':
	echo "usuario sem sessão";
	break;
	
}

 ?>