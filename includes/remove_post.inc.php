<?php
include_once('util/helpers.php');
include('crud/DataBase.php');
$post_id = $_POST["post_id"];
console_log($post_id);
if (DataBase::removePost($post_id) == 1) {
    header('Location: /admin.php');
}

