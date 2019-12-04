<?php
include __DIR__.'/../Controller/ClienteControl.php';
$clienteControl = new ClienteControl();

header('Content-type: application/json');

if ($clienteControl->findAll()) {
	http_response_code(200);
	echo json_encode($clienteControl->findAll());


}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>