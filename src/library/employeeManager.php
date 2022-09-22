<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

// session_start();

function loadAllEmployees(){
    $employeesJson = file_get_contents('../../resources/employees.json');
    return $employeesJson;
}

function leer(){
    $leer = file_get_contents('../../resources/employees.json');
    $leyendo = json_decode($leer, true);

    foreach ($leyendo as $product) {
        print_r($product);
    }
}


// require_once "./employeeController.php";

// $datos = [];
// $userId = $_SERVER['QUERY_STRING']


// function employeeDashboard() {




// function addEmployee(array $newEmployee){




// function deleteEmployee(string $id)
// {
// // TODO implement it
// }


// function updateEmployee(array $updateEmployee)
// {
// // TODO implement it
// }


// function getEmployee(string $id)
// {
// // TODO implement it
// }


// // function removeAvatar($id)
// // {
// // // TODO implement it
// // }


// function getQueryStringParameters(): array
// {
// // TODO implement it
// }

// function getNextIdentifier(array $employeesCollection): int
// {
// // TODO implement it
// }
