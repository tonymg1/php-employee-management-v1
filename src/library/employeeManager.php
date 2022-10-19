<?php

function loadAllEmployees(){
    $employeesJson = file_get_contents('../../resources/employees.json');
    return $employeesJson;
}


function addNewEmployee($createdEmployee) {

    $employeesJson = file_get_contents('../../resources/employees.json');
    $employeesDecodedJson = json_decode($employeesJson, true);

    $createdEmployee["id"] = end($employeesDecodedJson)["id"] + 1;

    array_push($employeesDecodedJson, $createdEmployee);

    $employeeEncodedJson = json_encode($employeesDecodedJson);
    file_put_contents("../../resources/employees.json", $employeeEncodedJson);

    echo $employeeEncodedJson;
}


function getEmployee($id) {

    $employeesJson = file_get_contents('../resources/employees.json');
    $employeesDecodedJson = json_decode($employeesJson, true);

    foreach ($employeesDecodedJson as $employee) {

        $employeeId = $employee["id"];

        if ($id == $employeeId) {

            ?>
            <form method="post" action="./library/employeeController.php?id=<?php echo $employee["id"] ?>" class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="employee-name" value=<?php echo $employee["name"] ?> required>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="employee-last-name" value=<?php echo $employee["lastName"] ?> required>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Email address</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="employee-email" value=<?php echo $employee["email"] ?> required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Gender</label>
                    <select class="form-select" id="validationCustom04" name="employee-gender" value="">
                        <option selected disabled value="">Choose...</option>
                        <?php 
                            if ($employee["gender"] == "woman"){
                                ?>
                                <option selected>Woman</option>
                                <option>Man</option>
                                <?php
                            } elseif ($employee["gender"] == "man") {
                                ?>
                                <option>Woman</option>
                                <option selected>Man</option>
                                <?php
                            } else {
                                ?>
                                <option>Woman</option>
                                <option>Man</option>
                                <option selected>-</option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationCustom03" name="employee-city" value=<?php echo $employee["city"] ?> required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Street Address</label>
                    <input type="text" class="form-control" id="validationCustom05" name="employee-street-address" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">State</label>
                    <input type="text" class="form-control" id="validationCustom05" name="employee-state" value=<?php echo $employee["state"] ?> required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Age</label>
                    <input type="text" class="form-control" id="validationCustom05" name="employee-age" value=<?php echo $employee["age"] ?> required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Postal Code</label>
                    <input type="number" class="form-control" id="validationCustom05" name="employee-postal-code" value=<?php echo $employee["postalCode"] ?> required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="validationCustom05" name="employee-phone-number" value=<?php echo $employee["phoneNumber"] ?> required>
                </div>
                <div class="col-12">
                    <a type="button" class="btn btn-secondary" href="./dashboard.php">Return</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            <?php
        }

       
    }
}


function updateEmployee(array $updateEmployee){
    echo "<pre>";
    print_r($updateEmployee);
    echo "</pre>";

    $employeesJson = file_get_contents('../../resources/employees.json');
    $employeesDecodedJson = json_decode($employeesJson, true);

    for ($i=0; $i < count($employeesDecodedJson); $i++) {

        if ($employeesDecodedJson[$i]["id"] == $updateEmployee["id"]) {
            $employeesDecodedJson[$i] = $updateEmployee;
        }
    }

    $employeeEncodedJson = json_encode($employeesDecodedJson);
    file_put_contents("../../resources/employees.json", $employeeEncodedJson); 

    header("Location: ../dashboard.php");
}
