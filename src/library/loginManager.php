<?php

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
                header("Location: ../dashboard.php");
            }
        } else {
            header("Location: ../../ini.php?action=loginError");
        }
    }
}

function logout() {
    if (isset($_POST["logout"])) {
        header("Location: ../../ini.php");
    }
}
