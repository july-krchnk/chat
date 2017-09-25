<?php

require_once 'config.php';

$message = trim($_POST['comment']);
$time = time();

ob_start();

if(!empty($message)) {
    $query = "INSERT INTO `post`(`message`, `time`) VALUES ('$message', $time)";
    $result = mysqli_query($connection, $query);
}


//if ($query == true){
//    include "./index.php";
//}

header('Location: /index.php');