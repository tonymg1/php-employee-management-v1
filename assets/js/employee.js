// // console.log('holaaaaaaaaaa');
// function loadAllEmployees() {
//     fetch("./library/employeeController.php?action=", { method: "GET" })
//         .then(response => response.json())
//         .then(data => {
//             renderAllEmployees(data);
//         });
// }


// loadAllEmployees();

// function loadAllEmployees() {
//     fetch("./library/employeeController.php?action=listEmployees", { method: "GET" })
//         .then(response => response.json())
//         .then(data => {
//             renderAllEmployees(data);
//         });
// }

// function renderAllEmployees(data){
    

//     const idJson = document.querySelector("validationCustom02");

//     data.forEach((employee) => {
//         console.log(employee.age);
//         console.log("sdfsdf");
//         idJson.innerHTML = `
//             <th>${employee.id}</th>
//             <input.value>${employee.name}</input.value>
//             <input>${employee.email}</input>
//             <input>${employee.age}</input>
//             <input>${employee.streetAddress}</input>
//             <input>${employee.city}
//             <input>${employee.state}
//             <input>${employee.postalCode}
//             <input>${employee.phoneNumber}`
        
//         tableBody.appendChild(idJson);
//     });
// }

// function sendToEmployee(){
    
//     window.location.href = "employee.php";

// }
