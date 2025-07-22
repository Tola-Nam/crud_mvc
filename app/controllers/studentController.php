<?php
require_once('app/models/students.php');

class StudentController
{

    private $model;

    public function __construct()
    {
        $this->model = new Students();
    }
    public function index()
    {
        $students = $this->model->retrieveData();
        $title = 'studentList';
        $views = "app/views/index.php";
        include("app/views/layout.php");
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $name = $_POST['student_name'];
            $gender = $_POST['gender'];
            $phone_number = $_POST['phone_number'];
            $this->model->create(name: $name, phone_number: $phone_number, gender: $gender);
            // echo 'successfully';
            header("Location: index.php");
        } else {
            $title = 'studentList';
            $views = "app/views/create.php";
            include("app/views/layout.php");
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $name = $_POST['student_name'];
            $gender = $_POST['gender'];
            $phone_number = $_POST['phone_number'];

            $this->model->update($id, $name, $phone_number, $gender);
            header("Location: index.php");
        } else {

            $_GET['student_id'] = $id;
            $student = $this->model->getById($id);
            $title = 'studentList';
            $views = "app/views/edit.php";
            include("app/views/layout.php");
        }

    }

    public function destroy($id)
    {
        $this->model->delete($id);
        header("Location: index.php");
    }
}