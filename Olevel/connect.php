<?php
    $connection = mysqli_connect('localhost','root','','db_register');

    if(!$connection){
        echo die('Cant connect to the database').mysqli_error();
    }
?>