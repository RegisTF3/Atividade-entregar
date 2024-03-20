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
    case "Home":
        home();break;    
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

function alterar() {
    $id = $_POST["id"];
    $nomeProduto = $_POST["nomeProduto"];
    $quantidade = $_POST["quantidade"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    include 'produtoController.php';
    $contr = new produtoController();
    $contr->alterarProduto($id, $nomeProduto, $quantidade, $tipo, $valor);
}

function excluir(){
    if(isset($_POST["id"])) {
        $id = $_POST["id"];
        include 'produtoController.php';
        $contr = new produtoController();
        $contr->excluirProduto($id);
    } else {
        echo "ID do produto não foi recebido.";
    }
}

  function listar(){
    include '../View/Listarteste.php';
  }

  function home(){
    include '../View/GameCraftHome.html';
  }
?>