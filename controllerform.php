<?php

include 'pessoa.php';

$pessoa = new Pessoa();

            $pessoa->setNome($_POST['nome']);
            $pessoa->setIdade($_POST['idade']);
            $pessoa->setEstadoCivil($_POST['ec']);
            $pessoa->setDataNascimento($_POST['dn']);
            $pessoa->setProfissao($_POST['prof']);
            $pessoa->inserePessoa();

?>