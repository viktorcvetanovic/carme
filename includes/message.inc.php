<?php
include ('crud/DataBase.php');
include ('crud/Message.php');
$first_name = $_POST["fname"];
$last_name = $_POST["lname"];
$email= $_POST["email"];
$message = $_POST["message"];
DataBase::addMessage(Message::withRow([$first_name,$last_name,$email,$message]));
header('Location: /index.php');