// tenemos que usarlo para hacer la parte del dashboard. 
// este js se encargará de hacer los fetch al empoloyeeController.php.

// let loginForm = document.getElementById("login-form");

// loginForm.addEventListener("submit", sendDataToPHP);
// el dashboard tendrá varios eventListeners (create, read, update, delete).

var URLactual = window.location.href;
alert(URLactual)

if(URLactual == "http://localhost/proyectosAssembler/4/php-employee-management-v1/src/dashboard.php"){
    var dash = document.getElementById('dash');
    dash.style.fontWeight = "bold";
}else {
    var emp = document.getElementById('emp');
    emp.style.fontWeight = "bold";
}

loadAllEmployees();


function loadAllEmployees() {
    fetch("library/employeeController.php?action=listEmployees", { method: "GET" })
        .then(response => response.json())
        .then(data => {
            renderAllEmployees(data);
        });
}

function renderAllEmployees(data){
    // console.log(data);

    const tableBody = document.querySelector("tbody");

    data.forEach((employee) => {
        // console.log(employee.name);

        let tableRow = document.createElement("tr");
        tableRow.setAttribute("onclick", 'sendToEmployee("'+employee.id+'")')
    
        tableRow.innerHTML = `
            <th>${employee.id}</th>
            <td>${employee.name}</td>
            <td>${employee.email}</td>
            <td>${employee.age}</td>
            <td>${employee.streetAddress}</td>
            <td>${employee.city}</td>
            <td>${employee.state}</td>
            <td>${employee.postalCode}</td>
            <td>${employee.phoneNumber}</td>
            <td scope="col" title="Remove employee"><a href=""><i class="bi bi-trash3-fill"></i></a></td>`
        
        tableBody.appendChild(tableRow);
    });
}

// let ejemplo = document.getElementById('validationCustom01')

// ejemplo.value =  sendToEmployee(userId);

function sendToEmployee(userId){
    window.location.href = './employee.php?' + userId + '';
}  

// ejemplo();
    // console.log("userId");
    // fetch("./library/employeeController.php?action=listEmployees", { method: "GET" })
    //     .then(response => response.json())
    //     .then(data => {
    //         renderAllEmployees(data);
    //         return renderAllEmployees(data)
    //     });
    // const printTheData = document.querySelector(".form-control");
    
    // data.forEach((employee) => {
    //     console.log(employee.name);
        
    //     //let printData = document.createElement("tr");
    //     printTheData.setAttribute("onclick", 'sendToEmployee("'+employee.name+'")')
        
    //     printTheData.value.innerHTML = "hola"
    // });
// }
// sendToEmployee(userId) ;







// function renderAllEmployees(data){
//     console.log(data);

//     const tableBody = document.querySelector("tbody");

//     data.forEach((employee) => {
//         console.log(employee.name);

//         let tableRow = document.createElement("tr");
//         tableRow.setAttribute("onclick", "sendToEmployee()")

//     })
// }

// const myReturn = document.getElementById('button');
// myReturn.addEventListener('click', "goBack()");

// function goBack(){
//     window.location.href = "dashboard.php";
    // console.log('hola');




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
