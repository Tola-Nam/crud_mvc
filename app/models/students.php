<?php
require_once('configs/database.php');
class Students
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connection();
    }

    public function create($name, $phone_number, $gender)
    {
        $stmt = $this->conn->prepare("INSERT INTO `cms_for_students` (`student_name`,`phone_number`,`gender`) VALUES (?,?,?)");
        $stmt->bind_param("sss", $name, $phone_number, $gender);
        return $stmt->execute();
    }

    public function retrieveData()
    {
        return $this->conn->query(query: "SELECT * FROM `cms_for_students`")->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM `cms_for_students` WHERE `student_id` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $name, $phone_number, $gender)
    {
        $stmt = $this->conn->prepare("UPDATE `cms_for_students` SET `student_name` = ?, `phone_number` = ?, `gender` = ? WHERE `student_id` = ?");
        $stmt->bind_param("sssi", $name, $phone_number, $gender, $id);
        return $stmt->execute();
    }
}