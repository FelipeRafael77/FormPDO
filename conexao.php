<?php

include 'pessoa.php';


$conexao = new PDO("mysql:host=localhost; dbname=formulario", "root", "");

$pessoa = new Pessoa();

$pessoa->setNome($_POST["nome"]);
$pessoa->setIdade($_POST["idade"]);
$pessoa->setEstadoCivil($_POST["ec"]);
$pessoa->setDataNascimento($_POST["dn"]);
$pessoa->setProfissao($_POST["prof"]);

class Singleton {
   public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    protected function __construct()
    {
    }
     
    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

class SingletonChild extends Singleton
{
}

$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === Singleton::getInstance());

var_dump($anotherObj === SingletonChild::getInstance());


try {

        $stmt = $conexao->prepare("INSERT INTO pessoa (nome, idade, estado_civil, data_nascimento, profissao) VALUES (:nome,:idade,:estado_civil,:data_nascimento,:profissao)");
        $stmt->bindValue(":nome", $pessoa->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(":idade", $pessoa->getIdade(), PDO::PARAM_STR);
        $stmt->bindValue(":estado_civil", $pessoa->getEstadoCivil(), PDO::PARAM_STR);
        $stmt->bindValue(":data_nascimento", $pessoa->getDataNascimento());
        $stmt->bindValue(":profissao", $pessoa->getProfissao(), PDO::PARAM_STR);

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