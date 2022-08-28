<?php

    $connect = mysqli_connect('localhost', 'root', '', 'db_test');

    if (!$connect) {
        die('Error connect to DataBase');
    }