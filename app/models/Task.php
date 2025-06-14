<?php
require_once(__DIR__ . '/../../config/database.php');

class Task {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM horario ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($horarioID) {
        $stmt = $this->conn->prepare("SELECT * FROM horario WHERE horarioID = ?");
        $stmt->execute([$horarioID]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($Hora, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes) {
        $stmt = $this->conn->prepare("INSERT INTO horario (Hora, Lunes, Martes, Miercoles, Jueves, Viernes) VALUES (?, ?, ?, ?, ? ,?)");
        return $stmt->execute([$Hora, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes ]);
    }

    public function update($horarioID, $Hora, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes) {
        $stmt = $this->conn->prepare("UPDATE horario SET Hora=?, Lunes=?, Martes=?, Miercoles=?, Jueves=?, Viernes=? WHERE horarioID=?");
        return $stmt->execute([$Hora, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes, $horarioID]);
    }

    public function delete($horarioID) {
        $stmt = $this->conn->prepare("DELETE FROM horario WHERE horarioID = ?");
        return $stmt->execute([$horarioID]);
    }
}
?>
