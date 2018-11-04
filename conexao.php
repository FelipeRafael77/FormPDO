<?php

include_once 'pessoa.php';

$conexao = new PDO("mysql:host=localhost; dbname=formulario", "root", "");

if (isset($_GET['acao'])){
$acao = $_GET['acao'];

// Verifica qual formulario foi submetido
    switch($acao) {
        //se for setProduto
        case "inserePessoa":{
            $pessoa1 = new Pessoa;
            $pessoa1->nome = $_POST['nome'];
            $pessoa1->idade = $_POST['idade'];
            $pessoa1->estado_civil = $_POST['ec'];
            $pessoa1->data_nascimento = $_POST['dn'];
            $pessoa1->profissao = $_POST['prof'];
            $pessoa1->inserePessoa();
            }
            break;
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