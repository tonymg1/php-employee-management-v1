<?php

require_once "./loginManager.php";

if (isset($_GET["action"])) {

    if ($_GET["action"] == "login") {
        login();
    } else if ($_GET["action"] == "logout") {
        logout();
    }

}
