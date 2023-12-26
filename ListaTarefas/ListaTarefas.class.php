<?php

include 'listatarefas_connect.php';

class ListaTarefas {
	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

    public function adicionarTarefa($nome) {
        $sql = 'INSERT INTO listatarefas SET nomeTarefa = :nome';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);

        $stmt->execute();
    }

    public function alterarStatus($id, $status) {
        $sql = 'UPDATE listatarefas SET status = :status WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':status', $status);

        $stmt->execute();
    }

    public function deletarTarefa($id) {
        $sql = 'DELETE FROM listatarefas WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        $stmt->execute();
    }

    public function getAll() {
        $sql = 'SELECT * FROM listatarefas';

        $stmt = $this->pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

?>
