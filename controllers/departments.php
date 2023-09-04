<?php

require_once __DIR__ . '/../models/Department.php';

$departmentModel = new Department();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $departmentModel->add($name);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $departmentModel->delete($id);
    }
}

$departments = $departmentModel->getAll();

require_once '../views/departments.php';
