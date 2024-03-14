<?php
require_once 'produtoDAO.php';

class produtoController {
    private $produtoDAO;

    public function __construct() {
        $this->produtoDAO = new produtoDAO();
    }

    public function cadastrarProduto($nome, $quantidade, $tipo, $valor) {
        $produto = new produto($nome, $quantidade, $tipo, $valor);
        return $this->produtoDAO->create($produto);
    }

    public function listarProdutos() {
        return $this->produtoDAO->read();
    }

    // Implemente outros métodos conforme necessário
}
?>