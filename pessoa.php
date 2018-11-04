<?php

class Pessoa{
	
	private $id;
	private $nome;
	private $idade;
	private $estado_civil;
	private $data_nascimento;
	private $profissao;


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

        $stmt = $conexao->prepare("INSERT INTO pessoa (nome, idade, estado_civil, data_nascimento, profissao) VALUES (:nome,:idade,:estado_civil,:data_nascimento,:profissao)");
        $stmt->bindValue(":nome", $this->nome, PDO::PARAM_STR);
        $stmt->bindValue(":idade", $this->idade, PDO::PARAM_STR);
        $stmt->bindValue(":estado_civil", $this->estado_civil, PDO::PARAM_STR);
        $stmt->bindValue(":data_nascimento", $this->data_nascimento);
        $stmt->bindValue(":profissao", $this->profissao, PDO::PARAM_STR);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $id = null;
                $nome = null;
                $idade = null;
                $estado_civil = null;
                $data_nascimento = null;
                $profissao = null;
            } else {
                echo "Erro no cadastro";
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar o sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
}

}


?>