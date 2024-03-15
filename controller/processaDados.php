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
    $nomeProduto = $_POST["nomeProduto"];
    $quantidade = $_POST["quantidade"];
    $tipo = $_POST ["tipo"];
    $valor = $_POST["valor"];
    include 'produtoController.php';
    $contr = new produtoController();
    $contr->cadastrarProduto($nomeProduto , $quantidade , $tipo , $valor);
}
?>