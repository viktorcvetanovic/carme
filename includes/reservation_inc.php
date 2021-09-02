<?php

include('crud/DataBase.php');
$post_id = $_POST["post_id"];
$user_id = $_POST["user_id"];

if (DataBase::addReservation($user_id, $post_id) == 1) {
    header('Location: /blog.php');
}