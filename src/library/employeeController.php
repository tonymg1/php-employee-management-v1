<?php

require_once "./employeeManager.php"; // la ruta tiene que iniciar en dashboard.

if (isset($_GET["action"]) && $_GET["action"] == "listEmployees") {
    // employeeDashboard();
    echo loadAllEmployees(); // file_get_contents('../../resources/employees.json')
}
?>
<?php

function ejemplo(){
if (isset($userId)){
    $employeesJ = file_get_contents('../../resources/employees.json');
    $employees = json_decode($employeesJ, true);
    foreach($employees as $employee){
        if($userId == $employee['id']){
            $user = $employee;
            break;
            echo "holaa";
        }
    }
}
}