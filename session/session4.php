<?php 

session_id('mkdj7685ha3orsm3h0qfn1uia4');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>