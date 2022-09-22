// console.log('holaaaaaaaaaa');

leer();


function leer() {
    fetch("./library/employeeController.php?action=lista", { method: "GET" })
        .then(response => response.json())
        .then(data => {
            renderAllEmployees(data);
        });
}

function renderAllEmployees(data){
    // console.log(data);

    const inputBody = document.querySelector("tr");

    data.forEach((employee) => {
        // console.log(employee.name);

        // let inputRow = document.createElement("tr");
        // inputRow.setAttribute("onclick", 'sendToEmployee("'+employee.id+'")')
    
        inputRow.value = "hola";
        tableBody.appendChild(tableRow);
    });
}

// loadAllEmployees();

//     window.location.href = "employee.php";

