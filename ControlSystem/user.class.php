<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function __construct() {
        $host = '127.0.0.1';
        $user = 'root';
        $password = '';
        $database = 'usuarios';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $password, $options);
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function adicionarUsuario($nome, $email, $senha) {
        $sql = 'INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);

        $stmt->execute();
    }

    public function deletarUsuario($id) {
        $sql = 'DELETE FROM usuarios WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        $stmt->execute();
    }

    public function getAll() {
        $sql = 'SELECT * FROM usuarios';

        $stmt = $this->pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

?>
