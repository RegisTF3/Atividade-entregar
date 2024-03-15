<?php
class produtoModel {
    private $id;
    private $nomeProduto;
    private $quantidade;
    private $tipo;
    private $valor;

    // Construtor
    public function __construct($id, $nomeProduto, $quantidade, $tipo, $valor) {
        $this->id = $id;
        $this->nomeProduto = $nomeProduto;
        $this->quantidade = $quantidade;
        $this->tipo = $tipo;
        $this->valor = $valor;
    }

    // Getters e setters
    public function getId() {
        return $this->id;
    }

   public function setId( $id)
    {
        $this->id = $id;
    }

	public function getNomeProduto() 
    {
        return $this->nomeProduto;
    }

	

	public function setNomeProduto( $nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
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
    public function cadastrarProduto(produtoModel $produto)
    {
        include_once '../dao/produtoDao.php';
        $produto = new produtoDao();
        $produto->cadastrarProduto($this);
    }
}
?>