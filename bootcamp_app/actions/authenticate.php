<?php

if (isset($_REQUEST['sid']) &&
    $_REQUEST['sid'] === $sid &&
    isset($_REQUEST['username']) &&
    isset($_REQUEST['password']) &&
    $_REQUEST['username'] == "valainis" &&
    $_REQUEST['password'] == "123"
) {
    $_SESSION['username'] = $_REQUEST['username'];
    $_SESSION['password'] = $_REQUEST['password'];
    header("location: index.php");
}

file_put_contents('error.log', json_encode($_REQUEST));

