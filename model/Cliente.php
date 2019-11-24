<?php
include __DIR__.'/Conexao.php';

class Pessoa extends Conexao {
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
    	$sql = "INSERT INTO clientes(nome,email,telefone,peso,sexo) VALUES (:nome,:email,:telefone)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('email' , $obj->email);
        $consulta->bindValue('telefone' , $obj->telefone);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE clientes SET nome = :nome, email = :email,telefone = :telefone WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
		$consulta->bindValue('email' , $obj->email);		
        $consulta->bindValue('telefone' , $obj->telefone);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM pessoas WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM pessoas WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM pessoas";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>