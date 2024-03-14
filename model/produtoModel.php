<?php
class Produto {
    private $id;
    private $nome;
    private $quantidade;
    private $tipo;
    private $valor;

    // Construtor
    public function __construct($nome, $quantidade, $tipo, $valor) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->tipo = $tipo;
        $this->valor = $valor;
    }

    // Getters e setters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}
?>