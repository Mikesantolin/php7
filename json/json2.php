<?php 

$json = '[{"nome":"Mike","idade":24},{"nome":"Jessica","idade":23}]';

$data = json_decode($json, true);

var_dump($data);

 ?>