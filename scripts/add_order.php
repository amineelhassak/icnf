<?php
if (!isset($_POST["name"]) || !isset($_POST["cin"]) || !isset($_POST["screenshot"]) || !isset($_POST["signature"]))
    header("locatio: /incf-l/error.php?error=true");

include_once("../db/connect.php");
