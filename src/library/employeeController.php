<?php

require_once "./employeeManager.php";

if (isset($_GET["action"])) {

    if ($_GET["action"] == "listEmployees") {

        echo loadAllEmployees(); 

    } else if ($_GET["action"] == "addEmployee") { 

        $createdEmployee = [
            "name" => $_POST["employee-name"],
            "lastName" => $_POST["employee-last-name"],
            "email" => $_POST["employee-email"],
            "city" => $_POST["employee-city"],
            "state" => $_POST["employee-state"],
            "age" => $_POST["employee-age"], 
            "postalCode" => $_POST["employee-postal-code"],
            "phoneNumber" => $_POST["employee-phone-number"]
        ];

        addNewEmployee($createdEmployee);
    } 
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $updateEmployee = [
        "id" => $id,
        "name" => $_POST["employee-name"], 
        "lastName" => $_POST["employee-last-name"],
        "email" => $_POST["employee-email"],
        "gender" => $_POST["employee-gender"], 
        "city" => $_POST["employee-city"],
        "streetAddress" => $_POST["employee-street-address"],
        "state" => $_POST["employee-state"],
        "age" => $_POST["employee-age"], 
        "postalCode" => $_POST["employee-postal-code"],
        "phoneNumber" => $_POST["employee-phone-number"]
    ];

    updateEmployee($updateEmployee); 
}
