<?php

require_once('app/controllers/studentController.php');
$studentController = new StudentController();

// require_once('configs/database.php');
// $conn = Database::connection();

//~ debug connection database success or fail 
// if(Database::connection()){
//     echo 'Connection successfully!!';
// }

$page = $_GET['page'] ?? 'index';

$id = $_GET['id'] ?? null;

switch ($page) {
    case 'create':
        $studentController->create();
        break;
    case 'edit':
        $studentController->edit($id);
        break;
    case 'destroy':
        $studentController->destroy($id);
        break;
    default:
        $studentController->index();
        break;
}