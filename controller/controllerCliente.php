<?php
class controllerCliente {
 public static function cadastrarCliente($nome , $cpf , $email , $cidade , $endereco , $senha) 
 {     include '../model/ClienteModel.php';
        $cliente =  new ClienteModel(null , $nome ,  $cpf , $email , $cidade , $endereco , $senha);
        $cliente->cadastrarCliente($cliente);
    }

    
}
?>