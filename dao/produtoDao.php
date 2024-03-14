<?php
require_once 'config.php';
require_once 'Produto.php';

class produtoDAO {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function create(Produto $produto) {
        $nome = $produto->getNome();
        $quantidade = $produto->getQuantidade();
        $tipo = $produto->getTipo();
        $valor = $produto->getValor();

        $sql = "INSERT INTO produtos (nome, quantidade, tipo, valor) VALUES ('$nome', $quantidade, '$tipo', $valor)";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }

    public function read() {
        $sql = "SELECT * FROM produtos";
        $result = $this->conn->query($sql);
        $produtos = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $produto = new Produto($row["nome"], $row["quantidade"], $row["tipo"], $row["valor"]);
                $produto->setId($row["id"]);
                array_push($produtos, $produto);
            }
        }

        return $produtos;
    }

    // Implemente os métodos update() e delete() conforme necessário
}
?>