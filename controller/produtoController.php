<?php
class produtoController {
 public static function cadastrarProduto($nomeProduto , $quantidade , $tipo , $valor) 
 {     include '../model/produtoModel.php';
        $produto =  new produtoModel(null , $nomeProduto , $quantidade , $tipo , $valor);
        $produto->cadastrarProduto($produto);
    }

    
}
?>