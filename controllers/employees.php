<?php

require_once __DIR__ . '/../models/Employee.php';
require_once __DIR__ . '/../models/Department.php';

$employeeModel = new Employee();
$departmentModel = new Department();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'email' => $_POST['email'],
        'username' => $_POST['username'],
        'address' => $_POST['address'],
        'telephone' => $_POST['telephone'],
        'comments' => $_POST['comments'],
        'department_id' => $_POST['department_id']
    ];
    $employeeModel->add($data);
}

$employees = $employeeModel->getAll();
$departments = $departmentModel->getAll();

require_once __DIR__ . '/../views/employees.php';
