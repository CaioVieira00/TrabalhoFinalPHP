<?php
include __DIR__.'/../model/Cliente.php';

class ClienteControl{
	function insert($obj){
		$cliente = new Cliente();
		return $cliente->insert($obj);		
	}

	function update($obj,$id){
		$cliente = new Cliente();
		return $cliente->update($obj,$id);
	}

	function delete($obj,$id){
		$cliente = new Cliente();
		return $cliente->delete($obj,$id);
	}

	function find($id = null){
		$cliente = new Cliente();
		return $cliente->find($id);
	}

	function findAll(){
		$cliente = new Cliente();
		return $cliente->findAll();
	}
}

?>