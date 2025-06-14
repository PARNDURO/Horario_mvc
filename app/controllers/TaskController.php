<?php 
require_once(__DIR__ . '/../models/Task.php');

class TaskController {
    private $model;

    public function __construct() {
        $this->model = new Task();
    }

    public function index() {
        $tasks = $this->model->getAll();
        require(__DIR__ . '/../views/tasks/index.php');
    }

    public function create() {
        require(__DIR__ . '/../views/tasks/form.php');
    }

    public function store() {
        $this->model->create($_POST['Hora'], $_POST ['Lunes'], $_POST ['Martes'], $_POST ['Miercoles'], $_POST ['Jueves'], $_POST ['Viernes']);
        header("Location: /Horario_mvc/public/index.php");
    }

    public function edit($horarioID) {
        echo "<script>console.log('horarioID recibido:', " . json_encode($horarioID) . ");</script>";
        $task = $this->model->getById($horarioID);
        echo "<script>console.log('Datos de la tarea:', " . json_encode($task) . ");</script>";
        require(__DIR__ . '/../views/tasks/form.php');
    }

    public function update($horarioID) {
        $this->model->update($horarioID, $_POST['Hora'], $_POST['Lunes'], $_POST['Martes'], $_POST['Miercoles'], $_POST['Jueves'], $_POST['Viernes']);
        header("Location: /Horario_mvc/public/index.php");
    }

    public function delete($horarioID) {
        $this->model->delete($horarioID);
        header("Location: /Horario_mvc/public/index.php");
    }
}
?>
