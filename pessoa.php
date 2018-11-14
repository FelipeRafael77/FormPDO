<?php

include_once 'conexao.php';

class Pessoa{
	
	private $id;
	private $nome;
	private $idade;
	private $estado_civil;
	private $data_nascimento;
	private $profissao;
	private $conexao;

	public function __construct(){
		$this->conexao = Conexao::Singleton();
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}	

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function getIdade(){
		return $this->idade;
	}	

	public function setEstadoCivil($estado_civil){
		$this->estado_civil = $estado_civil;
	}

	public function getEstadoCivil(){
		return $this->estado_civil;
	}	

	public function setDataNascimento($data_nascimento){
		$this->data_nascimento = $data_nascimento;
	}

	public function getDataNascimento(){
		return $this->data_nascimento;
	}	

	public function setProfissao($profissao){
		$this->profissao = $profissao;
	}

	public function getProfissao(){
		return $this->profissao;
	}

	public function inserePessoa(){
		
		try {

			$date = strtotime($data_nascimento);
			$data_formatada = date('Y/m/d', $date);
			
			$stmt = $this->conexao->getStmt("INSERT INTO pessoa (nome, idade, estado_civil, data_nascimento, profissao) VALUES (:nome,:idade,:estado_civil,:data_nascimento,:profissao)");
			$stmt->bindValue(":nome", $this->nome, PDO::PARAM_STR);
			$stmt->bindValue(":idade", $this->idade, PDO::PARAM_STR);
			$stmt->bindValue(":estado_civil", $this->estado_civil, PDO::PARAM_STR);
			$stmt->bindValue(":data_nascimento", $data_formatada);
			$stmt->bindValue(":profissao", $this->profissao, PDO::PARAM_STR);
			if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					echo "<script>alert('Dados inseridos com sucesso!');</script>";
					header('Location: controllerform.php');
					$id = null;
					$nome = null;
					$idade = null;
					$estado_civil = null;
					$data_nascimento = null;
					$profissao = null;
				} else {
					echo "<script>alert('Erro no cadastro!');</script>";
					header('Location: controllerform.php');
				}
			} else {
				throw new PDOException("Erro: Não foi possível executar o sql");
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}

	public function listarPessoa(){

		$sql = $this->conexao->getStmt("SELECT idPessoa, nome, idade, estado_civil, data_nascimento, profissao FROM pessoa");
		if($sql->execute()){
			return $sql->fetchAll();
		}


	}

	public function deletaPessoa($id){
		$sql = $this->conexao->getStmt("DELETE FROM pessoa WHERE idPessoa= ".$id);
		if($sql->execute()){
			return true;
		}else{
			return false;
		}
	}
}



?>