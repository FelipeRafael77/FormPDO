<?php

include 'conexao.php';

$sql = $this->conexao->getStmt("UPDATE pessoa SET nome=:nome, idade=:idade, estado_civil=:estado_civil, data_nascimento=:data_nascimento, profissao=:profissao WHERE id= ".$id);

$stmt->bindValue(":nome", $this->nome, PDO::PARAM_STR);
$stmt->bindValue(":idade", $this->idade, PDO::PARAM_STR);
$stmt->bindValue(":estado_civil", $this->estado_civil, PDO::PARAM_STR);
$stmt->bindValue(":data_nascimento", $data_nascimento);
$stmt->bindValue(":profissao", $this->profissao, PDO::PARAM_STR);
		
		if($sql->execute()){
			return true;
		}else{
			return false;
		}

?>