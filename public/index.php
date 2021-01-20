<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function loadPage ($page_name) {
    include "../bootcamp_app/" . $page_name;
}
session_start();
$page_name = 'login.php';

if (isset($_SESSION['username']) &&
    isset($_SESSION['password']) &&
    $_SESSION['username'] === 'valainis' &&
    $_SESSION['password'] === '123'
) {
    if (isset($_GET['page']) && $_GET['page'] === "logout") {
        $page_name = "logout.php";
    }
    else {
        $page_name = "todo.php";
    }
    
}

else if (isset($_GET['sid']) && $_GET['sid'] === "000") {
    if (isset($_GET['username']) && isset($_GET['password'])) {
        if ($_GET['username'] == "valainis" && $_GET['password'] == "123") {
            $_SESSION['username'] = $_GET['username'];
            $_SESSION['password'] = $_GET['password'];
            $page_name = "todo.php";
        }
    }
    else {
        $page_name = "page404.php";
    }        
}
loadPage($page_name);

    
?>



