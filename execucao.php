<?php

require_once("util/Conexao.php");
require_once("modelo/Cliente.php");

do{

    echo"\n\n---CADRASTO DE CLIENTES----\n";
    echo"1- Inserir Cliente PF\n";
    echo"0- Sair\n";
    $opcao = readline("Informe a opção: ");

    switch($opcao) {
        case 1:
        $clientePF = new ClientePF();
        $clientePF->setNomeCompleto(readline("informe o nome conpleto:"));
        $clientePF->setNome(readline("informe o nome:"));
        $clientePF->setCpf(readline("informe o CPF:"));
        $clientePF->setEmail(readline("informe o e-mail:"));

            break;



    }

}while($opcao !=0);