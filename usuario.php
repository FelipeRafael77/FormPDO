<?php

include_once 'conexao.php';

class Usuario{
	
	private $login;
	private $senha;

	public function __construct(){
		$this->conexao = Conexao::Singleton();
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function insereUsuario(){
		
		try {
			
			$stmt = $this->conexao->getStmt("INSERT INTO usuario (login, senha) VALUES (:login,:senha)");
			$stmt->bindValue(":login", $this->login, PDO::PARAM_STR);
			$stmt->bindValue(":senha", $this->senha, PDO::PARAM_STR);
			if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					echo "<script>alert('Dados inseridos com sucesso!');</script>";
					header('Location: controllerusuario.php');
					$login = null;
					$senha = null;
				} else {
					echo "<script>alert('Erro no cadastro!');</script>";
					header('Location: controllerusuario.php');
				}
			} else {
				throw new PDOException("Erro: Não foi possível executar o sql");
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}

	public function listarUsuario(){

		$sql = $this->conexao->getStmt("SELECT login, senha FROM usuario");
		if($sql->execute()){
			return $sql->fetchAll();
		}


	}

	public function deletaUsuario($id){
		$sql = $this->conexao->getStmt("DELETE FROM usuario WHERE login= ".$login);
		if($sql->execute()){
			return true;
		}else{
			return false;
		}
	}
}