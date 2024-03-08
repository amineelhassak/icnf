<?php
include_once("../db/connect.php");

if (!isset($_POST["id"])) {
    header("location: /khalid/error");
    exit; // Exit the script if "id" parameter is not set
}
// Toggle the boolean value for "validate" column

$togles = $_POST["value"] == "0" ? "1" : "0";

// Prepare the SQL query
$sql = "UPDATE `order` SET `validate` = '" . $togles . "' WHERE `order`.`id` = " . $_POST["id"] . "";

echo $sql;

if (mysqli_query($conn, $sql)) {
    header("location: /khalid/admin");
} else {
    header("location: /khalid/error");
}
