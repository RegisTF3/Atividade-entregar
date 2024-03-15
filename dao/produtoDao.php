<?php


class produtoDAO {
    
     public function cadastrarProduto (produtoModel $produto){
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO  produtos ( nomeProduto , quantidade , tipo , valor)
                  VALUES (:nomeProduto , :quantidade , :tipo , :valor)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomeProduto' , $produto->getNomeProduto());
        $stmt->bindValue(':quantidade',$produto->getQuantidade());
        $stmt->bindValue(':tipo' ,$produto->getTipo());
        $stmt->bindValue(':valor',$produto->getValor());
        $res = $stmt->execute();
        if($res){
            echo "<script>alert('Cadastro realizado com Sucesso!!!');</script>";
        }
        else{
            echo "<script> alert('Erro: ão foi possível realizar o cadastr');</script>";
        }
                 
     }
    }
?>