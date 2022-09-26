// tenemos que usarlo para hacer la parte del dashboard. 
// este js se encargará de hacer los fetch al empoloyeeController.php.

// let loginForm = document.getElementById("login-form");

// loginForm.addEventListener("submit", sendDataToPHP);
// el dashboard tendrá varios eventListeners (create, read, update, delete).

loadAllEmployees();


function loadAllEmployees() {
    fetch("library/employeeController.php?action=listEmployees", { method: "GET" })
        .then(response => response.json())
        .then(data => {
            renderAllEmployees(data);
        });
}

function renderAllEmployees(data){
    const tableBody = document.querySelector("tbody");

    tableBody.innerHTML = '';

    data.forEach((employee) => {
        let tableRow = document.createElement("tr");
    
        [employee.id, employee.name, employee.email, employee.age, employee.streetAddress, employee.city, employee.state, employee.postalCode, employee.phoneNumber].forEach(e => {
            const td = document.createElement('td');
            td.innerHTML = e;
            td.addEventListener("click", function(e) {
                e.preventDefault();
                navigateToEmployee(employee.id);
            })
            tableRow.appendChild(td);
        });
            
        const buttonRemove = document.createElement("td");
        buttonRemove.innerHTML = '<a href=""><i class="bi bi-trash3-fill buttonRemove"></i></a>';
        buttonRemove.addEventListener("click", function(e) {
            e.preventDefault();
            deleteEmployee(employee.id);
        });

        tableRow.appendChild(buttonRemove);

        tableBody.appendChild(tableRow);
    });
}

function navigateToEmployee(userId){
    window.location.href = './employee.php?' + userId + '';
}  


function deleteEmployee(userId){
    if (confirm("Are you sure?")) {
        fetch(`library/employeeController.php?action=deleteEmployee&id=${userId}`, { method: "DELETE" }).then(response => response.json());
    }
}

const addEmployeeForm = document.querySelector("#add-employee-form");

addEmployeeForm.addEventListener("submit", (e) => {
    e.preventDefault();

    let newEmployeeData = new FormData(addEmployeeForm);
    // console.log(newEmployeeData);
    // console.log(newEmployeeData.get("employee-name"));

    fetch("./library/employeeController.php?action=addEmployee", {
        method: "POST",
        body: newEmployeeData
    })
        .then(response => response.json())
        .then(data => {
            // console.log(data);
            renderAllEmployees(data);
        })
});

function addNewEmployee() {
    let newEmployeeId = document.querySelector("#employee-id").value;
    let newEmployeeName = document.querySelector("#employee-name").value;
    let newEmployeeEmail = document.querySelector("#employee-email").value;
    let newEmployeeAge = document.querySelector("#employee-age").value;
    let newEmployeeStreet = document.querySelector("#employee-street-address").value;
    let newEmployeeCity = document.querySelector("#employee-city").value;
    let newEmployeeState = document.querySelector("#employee-state").value;
    let newEmployeePostalCode = document.querySelector("#employee-postal-code").value;
    let newEmployeePhoneNumber = document.querySelector("#employee-phone-number").value;

    console.log(newEmployeeEmail);

    let createdEmployee = {
        age: newEmployeeAge,
        city: newEmployeeCity,
        email: newEmployeeEmail,
        gender: "",
        id: newEmployeeId,
        lastName: "",
        name: newEmployeeName,
        phoneNumber: newEmployeePhoneNumber,
        postalCode: newEmployeePostalCode,
        state: newEmployeeState,
        streetAddress: newEmployeeStreet
    };

    console.log(createdEmployee);

    // fetch("./library/employeeController.php?action=listEmployees", { method: "GET" })
    //     .then(response => response.json())
    //     .then(data => {
    //         data.push(createdEmployee);
    //         console.log(data);
    //     });

    // fetch("./library/employeeController.php?action=addEmployee", {
    //     method: "POST",
    //     body: createdEmployee
    // })
    //     .then(response => response.json())
    //     .then(data => {
    //         data.push(createdEmployee);
    //         console.log(data);
    //     });

    //antes de llamar a la función se tiene que añadir el nuevo objeto al json.
    //renderAllEmployees(data);
}


// let stay = document.getElementById('stay');
// stay.addEventListener('click', function(){
//     alert('hola')
// })

// function sendDataToPHP(e) {
//     e.preventDefault();

//     const formData = new FormData(loginForm);
//     console.log(formData);

//     fetch("../../src/library/employeeController.php?action=listemployees", {
//         method: "GET",
//     })
//         .then((response) => response.json())
//         .then((data) => {
            // if (data.status === "success") {
            //     alert("yes");
            // }
//             console.log(data);
//         })
//         .catch((err) => console.log("Request failed: ", err));
// }

// borrar aki 
function remove_tr(This){

    if(This.closest('tbody').childElementCount === 1){
        alert("sin permiso")

    }else{
        alert("Are you sure?")
        fetch("./library/employeeController.php?action=deleteEmployee", {
            method: "DELETE",
            Headers: {
                        'Content-type': 'application/json'
            },
        })
            .then(response => {
            if (response.ok) {
            console.log("DELETE request successful")
            }else{
            console.log("DELETE request unsuccessful")
            } 
            return response
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
        This.closest('tr').remove()






    }
}
//¡esto no me sale
// function remove_tr(This){
//     $employees = json_decode(file_get_contents('../resouces/employees.json'))
//     for ($i = 0 ; $i < count($employees); $i++){
//         if(strval($employees[$i]['id']) === $i){
//             unset ($employees[$i]);
//         }
//     }
//     file_put_contents('../resouces/employees.json', json_encode($employees));
//     json_encode($employees);
// }