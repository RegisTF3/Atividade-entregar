<?php

switch($_REQUEST["op"])
{
    case "Incluir":
        incluir();break;
    case "Alterar":
        alterar();break;
    case "Excluir":
          excluir();break;
    case "Listar":
        listar();break;
    default:
    echo "não encontrou chave";
}




function incluir(){
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST ["email"];
    $cidade = $_POST["cidade"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];
    include 'controllerCliente.php';
    $contr = new controllerCliente();
    $contr->cadastrarCliente($nome , $cpf , $email , $cidade , $endereco , $senha);
}
?>