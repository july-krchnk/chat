<?php

$connection = mysqli_connect('localhost', 'root', '', 'chat');
if(!$connection){
    echo 'Cannot connect to DB';
    exit();
}
