<?php
include("../db/connect.php");

try {
    $res = mysqli_query($conn, "select * from admin where username='" . $_POST["username"] . "' and password='" . $_POST["password"] . "' ;");
    $user = mysqli_fetch_row($res);
    if (!$user) {
        header("location: /icnf-l/login");
        exit();
    }
    session_start();
    $_SESSION["username"] = $user[1];
    $_SESSION["login"] = true;
} catch (mysqli_sql_exception $e) {
    die("" . $e->getMessage());
}
header("location: /icnf-l/admin");
