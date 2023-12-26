<?php 

class User {

    private $id;
    private $email;
    private $password;
    private $pdo;

    public function __construct() {
        $dns = "mysql:dbname=login;host=localhost";
        $user = "root";
        $pass = "";

        $this->pdo = new PDO($dns, $user, $pass);
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function add($email, $password) {
        $sql = "INSERT INTO users SET email = :e, password = :p";

        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":p", $password);

        return $stmt->execute();
    }
}

?>
