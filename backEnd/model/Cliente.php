<?php
include __DIR__.'/Conexao.php';

class Cliente extends Conexao {
	private $nome;
    private $email;    
    private $telefone;


    public function getNome() {
        return $this->nome;
    }

   
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    
    public function getEmail() {
        return $this->email;
    }

   
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }
    
    public function insert($obj){    
    	$sql = "INSERT INTO Cliente(nome,email,telefone) VALUES (:nome,:email,:telefone)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('email' , $obj->email);
        $consulta->bindValue('telefone' , $obj->telefone);
    	return $consulta->execute();

	}

	public function findAll(){
		$sql = "SELECT * FROM Cliente";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>