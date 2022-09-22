<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

// session_start();
// require_once "employeeController.php";

function loadAllEmployees(){
    $employeesJson = file_get_contents('../../resources/employees.json');
    return $employeesJson;
}

function obtenerInfo(){
    $obtenerJson = file_get_contents('../resources/employees.json');
    $employees = json_decode($obtenerJson, true);
    $user = [];
    $userId = $_SERVER['QUERY_STRING'];

    foreach ($employees as $employee) {
        // print_r($employee);
        if($userId == $employee['id']){
            $user = $employee;
            break;
        }
    }echo $userId;
    }


// require_once "./employeeController.php";



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
