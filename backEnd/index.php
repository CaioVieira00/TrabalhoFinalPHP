<?php
//define('PASTAPROJETO', 'AulaBanco');
define('PASTAPROJETO', 'TRABALHOWEB/backEnd');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
} 

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI']; // IDENTIFICA A URI DA REQUISIÇÃO


switch ($request) {
    case '/'.PASTAPROJETO.'/Cliente' :
        require __DIR__ . '../api/'.$answer.'_Cliente.php';
        break;
    
    default:
        //require __DIR__ . '/api/404.php';
        break;
}