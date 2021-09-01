<?php
include_once('crud/DataBase.php');
include_once ('crud/User.php');
$username = $_POST["username"];
$password = $_POST["password"];
$match = false;
$user = new User();
$result = DataBase::readAllUser();
foreach ($result as $u) {
    if ($u->getUsername() == $username && $u->getPassword() == $password) {
        $match = true;
        $user = $u;
    }
}

if ($match) {
    session_start();
    $id = $user->getId();
    $_SESSION["id"] = $id;
    header('Location: /index.php');
} else {
    header('Location: /login.php');
}