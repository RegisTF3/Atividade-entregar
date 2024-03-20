<?php
class produtoController {
 public static function cadastrarProduto($nomeProduto , $quantidade , $tipo , $valor) 
 {     include '../model/produtoModel.php';
        $produto =  new produtoModel(null , $nomeProduto , $quantidade , $tipo , $valor);
        $produto->cadastrarProduto($produto);
    }

    public static function listarProduto(){
        include '../model/produtoModel.php';
        $produto = new produtoModel(null, null, null, null, null, null, null);
        return $produto->listarProduto();
    }
    public static function resgatarPorID($id){
        include '../model/produtoModel.php';
        $produto= new produtoModel(null, null, null, null, null, null, null);
        return $produto->resgatarPorID($id);
    }

    
    public static function alterarProduto($id, $nomeProduto, $quantidade, $tipo, $valor) {
        include_once '../model/produtoModel.php';
        $produto = new produtoModel($id, $nomeProduto, $quantidade, $tipo, $valor);
        $produto->alterarProduto();
    }

    public static function excluirProduto($id){
        include '../model/produtoModel.php';
        $produto = new produtoModel(null, null, null, null, null, null, null);
        $produto->excluirProduto($id);
    }
}
?>