<?php
require_once(__DIR__ . '/../app/controllers/TaskController.php');
// aqui nos conectamos con el controlador 

$controller = new TaskController();
//creamos una nueva tarea del controlador
$action = $_GET['action'] ?? 'index';
$horarioID = $_GET['horarioID'] ?? null;
// 
switch ($action) {
    //case significa caso 
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($horarioID);
        break;
    case 'update':
        $controller->update($horarioID);
        break;
    case 'delete':
        $controller->delete($horarioID);
        break;
    default:
        $controller->index();
        break;
}
