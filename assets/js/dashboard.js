// tenemos que usarlo para hacer la parte del dashboard.
// este js se encargará de hacer los fetch al empoloyeeController.php.

// let loginForm = document.getElementById("login-form");

// loginForm.addEventListener("submit", sendDataToPHP);
// el dashboard tendrá varios eventListeners (create, read, update, delete).

var URLactual = window.location.href;


if(URLactual == "http://localhost/proyectosAssembler/4/php-employee-management-v1/src/dashboard.php"){
    var dash = document.getElementById('dash');
    dash.style.fontWeight = "bold";
}else {
    var emp = document.getElementById('emp');
    emp.style.fontWeight = "bold";
}


loadAllEmployees();

function loadAllEmployees(){
    fetch("./library/employeeController.php?action=listEmployees", { method: "GET" })
        .then(response => response.json())
        .then(data => {
            renderAllEmployees(data);
        });
}

const addEmployeeForm = document.querySelector("#add-employee-form");

addEmployeeForm.addEventListener("submit", (e) => {
    e.preventDefault();

    let newEmployeeData = new FormData(addEmployeeForm);

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
}

function renderAllEmployees(data){
    console.log(data);

    const tableBody = document.querySelector("tbody");

    tableBody.innerHTML = "";

    data.forEach((employee) => {
        console.log(employee.name);

        const tableRow = document.createElement("tr");
        tableRow.addEventListener("click", ()=> loadEmployee(employee.id)); // ()=> para que no se dispare automáticamente.

        tableRow.innerHTML = `
            <th scope="row">${employee.id}</th>
            <td>${employee.name}</td>
            <td>${employee.email}</td>
            <td>${employee.age}</td>
            <td>${employee.city}</td>
            <td>${employee.state}</td>
            <td>${employee.postalCode}</td>
            <td>${employee.phoneNumber}</td>
            <td scope="col" title="Remove employee"><a href="" class="btn btn-outline-danger me-2 btn-sm"><i class="bi bi-trash3-fill"></i></a></td>
        `
        tableBody.appendChild(tableRow);
    });
}

function loadEmployee(id){
    window.location.href = `./employee.php?id=${id}`;
}
