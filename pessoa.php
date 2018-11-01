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


}


?>