<?php
if (!isset($_POST["name"]) || !isset($_POST["cin"]) || !isset($_POST["screenshot"]) || !isset($_POST["signature"]))
    header("locatio: /incf-l/error.php?error=true");

include_once("../db/connect.php");
$distDir = "../uploads/";

if (isset($_FILES["screenshot"]) && isset($_FILES["signature"]) && $_FILES["signature"]["error"] == 0 && $_FILES["screenshot"]["error"] == 0) {
    $screen = "screen." . pathinfo($_FILES['screenshot']['name'], PATHINFO_EXTENSION);
    $doc = "signature." . pathinfo($_FILES['signature']['name'], PATHINFO_EXTENSION);
    $targetDir = $distDir . $_POST["cin"] . "/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetPath1 = $distDir . $_POST["cin"] . "/" . $screen;
    $targetPath2 = $distDir . $_POST["cin"] . "/" . $doc;
    if (move_uploaded_file($_FILES["screenshot"]["tmp_name"], $targetPath1) && move_uploaded_file($_FILES["signature"]["tmp_name"], $targetPath2)) {
        $sql = "INSERT INTO `order` (customer, cin, screenshot, document) VALUES ('" . $_POST["name"] . "', '" . $_POST["cin"] . "', '" . $targetPath1 . "', '" . $targetPath2 . "')";
        mysqli_query($conn, $sql);
    } else {
        header("location: khalid/error");
    }
} else
    header("location: khalid/error");
header("location: /khalid/success");
