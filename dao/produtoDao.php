<?php
class produtoDAO {
    
    public function cadastrarProduto (produtoModel $produto){
       include_once 'Conexao.php';
       $conex = new Conexao();
       $conex->fazConexao();
       $sql = "INSERT INTO produtos (nomeProduto, quantidade, tipo, valor)
                 VALUES (:nomeProduto, :quantidade, :tipo, :valor)";
       $stmt = $conex->conn->prepare($sql);
       $stmt->bindValue(':nomeProduto', $produto->getNomeProduto());
       $stmt->bindValue(':quantidade', $produto->getQuantidade());
       $stmt->bindValue(':tipo', $produto->getTipo());
       $stmt->bindValue(':valor', $produto->getValor());
       $res = $stmt->execute();
       if($res){
           echo "<script>alert('Cadastro realizado com Sucesso!!!');</script>";
       }
       else{
           echo "<script> alert('Erro: Não foi possível realizar o cadastro');</script>";
       }
       echo "<script>location.href='../controller/processaDados.php?op=Home';</script>";
    }
    
    public function listarProduto()
    {
       include_once 'Conexao.php';
       $conex = new Conexao();
       $conex->fazConexao();
       $sql = "SELECT * FROM produtos ORDER BY id";
       return $conex->conn->query($sql);
    }
    
    public function resgatarPorID($id)
    {
       include_once 'Conexao.php';
       $conex = new Conexao();
       $conex->fazConexao();
       $sql = "SELECT * FROM produtos WHERE id=:id";
       $stmt = $conex->conn->prepare($sql);
       $stmt->bindValue(':id', $id);
       $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function alterarProduto(produtoModel $produto) {
      include_once 'Conexao.php';
      $conex = new Conexao();
      $conex->fazConexao();
      $sql = "UPDATE produtos SET nomeProduto = :nomeProduto, quantidade = :quantidade, tipo = :tipo, valor = :valor WHERE id = :id";
      $stmt = $conex->conn->prepare($sql);
      $stmt->bindValue(':nomeProduto', $produto->getNomeProduto());
      $stmt->bindValue(':quantidade', $produto->getQuantidade());
      $stmt->bindValue(':tipo', $produto->getTipo());
      $stmt->bindValue(':valor', $produto->getValor());
      $stmt->bindValue(':id', $produto->getId());
      $res = $stmt->execute();
      if ($res) {
          echo "<script>alert('Registro Alterado com Sucesso!!!');</script>";
      } else {
          echo "<script>alert('Erro: Não foi possível Alterar o cadastro');</script>";
      }
  }
    
  public function excluirProduto($id){
   include_once 'Conexao.php';
   $conex = new Conexao();
   $conex->fazConexao();
   $sql= "DELETE FROM produtos WHERE id = $id"; // Corrigindo a consulta de exclusão
   $res = $conex->conn->query($sql);
   if($res){
       echo "<script>alert('Exclusão realizado com Sucesso!!!');</script>";
   }
   else{
       echo "<script> alert('Erro: Não foi possível excluir o produto');</script>";
   }
}
}
?>