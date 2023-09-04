<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '/departments':
        require __DIR__ . '/controllers/departments.php';
        break;
    case '/employees':
        require __DIR__ . '/controllers/employees.php';
        break;
    default:
        echo "404 Not Found";
        break;
}
