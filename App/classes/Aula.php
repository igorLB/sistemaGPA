<?php

//namespace App\classes;

//use PDO;

/**
 * 
 */
class Aula
{
	
	private $pdo;
	private $user = 'root';
	private $password = '';
	private $host = 'localhost';
	private $dbName = 'para_testes';
	private $dbCharset = 'UTF8';

	public function __construct()
	{
		try{
			$this->pdo = new PDO("mysql:dbname=$this->dbName;host=$this->host;charset=$this->dbCharset", $this->user, $this->password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	

	public function oi(){
		return "olaaa";
	}


	public function create( $dadosJson ){

		//Numa aplicação real, este numero viria da SESSION
		$user = 1;

		//true significa que o json sera convertido em um array
		$dados = json_decode($dadosJson, true);

		try{
			$pdoStatement = $this->pdo->prepare("INSERT INTO gpa_aula (nm_aula, nm_professor, dt_criacao, observacao, corretas, total, nao_respondidas, id_aluno, id_disciplina) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?); ");
			$pdoStatement->bindParam(1, $dados['nmAula'], PDO::PARAM_STR);
			$pdoStatement->bindParam(2, $dados['nmProfessor'], PDO::PARAM_STR);
			$pdoStatement->bindParam(3, $dados['dtAula'], PDO::PARAM_STR);
			$pdoStatement->bindParam(4, $dados['observacao'], PDO::PARAM_STR);
			$pdoStatement->bindParam(5, $dados['corretas'], PDO::PARAM_INT);
			$pdoStatement->bindParam(6, $dados['total'], PDO::PARAM_INT);
			$pdoStatement->bindParam(7, $dados['naoRespondidas'], PDO::PARAM_INT);
			$pdoStatement->bindParam(8, $user, PDO::PARAM_INT);
			$pdoStatement->bindParam(9, $dados['disciplina'], PDO::PARAM_INT);

			$pdoStatement->execute();
			return true;

		}catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}


	}

	public function update( $dados ){

	}

	public function find($id){

	}

	public function delete($id){
		try{
			$pdoStatement = $this->pdo->prepare("DELETE FROM gpa_aula WHERE id_aula = :id LIMIT 1");
			$pdoStatement->bindParam(':id', $id, PDO::PARAM_INT);
			$pdoStatement->execute();
			return true;
		}catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}


	public function getAll(){

		try{
			$pdoStatement = $this->pdo->query("SELECT * FROM `gpa_aula`;");

			$result =  $pdoStatement->fetchAll();
		}catch(PDOException $e){
			echo $e->getMessage();
		}

		$json = json_encode($result);

		return $json;
	}
}

$a = new Aula();