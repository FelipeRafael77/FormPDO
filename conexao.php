<?php

try{

    $conexao = new PDO("mysql:host=localhost; dbname=formulario", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS formulario";
    $conexao->exec($sql);
    $conexao->exec($sql);
    $sql = "CREATE TABLE IF NOT EXISTS pessoa (
                idPessoa int(11) AUTO_INCREMENT PRIMARY KEY,
                nome varchar(50) NOT NULL,
                idade varchar(2) NOT NULL,
                estado_civil varchar(20) NOT NULL,
                data_nascimento date NOT NULL,
                profissao varchar(50) NOT NULL)";
    
    $sql = "CREATE TABLE IF NOT EXISTS usuario (
                id_usuario int(11) AUTO_INCREMENT PRIMARY KEY,
                login varchar(50) NOT NULL,
                senha varchar(32) NOT NULL)";            
    $conexao->exec($sql);
    echo "DB criado com sucesso";
}

catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}


class Conexao {

    public static $conexao;
    public $dbh;

    
    public static function Singleton(){
        if(self::$conexao === null){
            $class = __CLASS__;
            self::$conexao = new Conexao("root", "", "localhost", "formulario");
        }

        return self::$conexao;
    }

    private function __construct($usuario, $senha, $host, $banco){

        $conexao = new PDO("mysql:host=localhost; dbname=formulario", "root", "");

        $dsn = "mysql:dbname=$banco;host=$host";
        try{
            $this->dbh = new \PDO($dsn,$usuario,$senha);
        }catch(\PDOException $e){
            die($e->getMessage()); 

        }
    }

    public function getStmt($sql){
        return $this->dbh->prepare($sql);
    }

}





?>