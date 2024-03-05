<?php

    $db_hostdb_host = "localhost";
    $db_name = "icnf";
    $db_username = "root";
    $db_password = "";

    $conn = mysqli_connect($db_hostdb_host, $db_username, $db_password, $db_name);
    if (mysqli_connect_errno()) {
        die("cant connect : ". mysqli_connect_error());
    }

