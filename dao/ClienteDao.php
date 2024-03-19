<?php


class ClienteDao {
    
     public function cadastrarCliente (ClienteModel $cliente){
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO  clientes ( nome , cpf, email, cidade, endereco, senha)
                  VALUES (:nome , :cpf, :email, :cidade, :endereco, :senha)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nome' , $cliente->getNome());
        $stmt->bindValue(':cpf' , $cliente->getCpf());
        $stmt->bindValue(':email' , $cliente->getEmail());
        $stmt->bindValue(':cidade' , $cliente->getCidade());
        $stmt->bindValue(':endereco' , $cliente->getEndereco());
        $stmt->bindValue(':senha' , $cliente->getSenha());
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