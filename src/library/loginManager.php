<?php
$error = "";

/* This file will contain the necessary functions so that the user can log in, 
save their session data and log out. */

// session_start(); 

function login() {
    $usersJson = file_get_contents('../../resources/users.json');
    $usersDecodedJson = json_decode($usersJson, true);
    $users = $usersDecodedJson["users"];

    foreach ($users as $user) {
        $userEmail = $user["email"];
        $pwdCrypt = $user["password"];
    }

    $pwdUser = "123456";
    $pwdVerify = (password_verify($pwdUser, $pwdCrypt)); // 1 or 0

    if (isset($_POST["login"])) {
        if ($_POST["user-email"] === $userEmail && $_POST["user-password"] === $pwdUser) {
            if ($pwdVerify) {
                // header("Location: ../dashboard.php?action=listemployees");
                header("Location: ../dashboard.php");
            }
        } else {
<<<<<<< HEAD
        
        
            header("Location: ../../ini.php");
            // disparar alerta
           ?> 
           <script>
            console.log("estoy")
            
           </script>
            <?php
=======
            header("Location: ../../loginController.php?action=loginError");
            // TODO disparar alerta
>>>>>>> develop
        }
    }
    
   
}

function logout() {
    if (isset($_POST["logout"])) {
        // session_destroy();
        header("Location: ../../ini.php");
    }
}

function loginError(){
    header("Location: ../../ini.php?action=loginError");
}