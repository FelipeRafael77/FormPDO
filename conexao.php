<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$estado_civil = $_POST['ec'];
$data_nascimento = $_POST['dn'];
$profissao = $_POST['prof'];

$conexao = new PDO("mysql:host=localhost; dbname=formulario", "root", "");

try {

    $date = strtotime($data_nascimento);
    $data_formatada = date('Y/m/d', $date);

        $stmt = $conexao->prepare("INSERT INTO pessoa (nome, idade, estado_civil, data_nascimento, profissao) VALUES (:nome,:idade,:estado_civil,:data_nascimento,:profissao)");
        $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindParam(":idade", $idade, PDO::PARAM_STR);
        $stmt->bindParam(":estado_civil", $estado_civil, PDO::PARAM_STR);
        $stmt->bindParam(":data_nascimento", $data_formatada);
        $stmt->bindParam(":profissao", $profissao, PDO::PARAM_STR);

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


?>