<?php 
require 'ZebraDatabase/Zebra_Database.php';

$db = new Zebra_Database();
$db->connect('localhost', 'root', '', 'encuestas');

$action = $_POST['action'];

if ($action == 'encuestaname') {
	$res = $db->insert(
		    'encuestas',
		    array(
		        'titulo'      => $_POST['titulo'],
		        'descripcion' => $_POST['descripcion']
		    )
		);
	if($res){
		echo '1';
	}else{
		echo $res;
	}
}





?>