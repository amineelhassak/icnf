<?php
session_start();
$_SESSION["login"] = false;
$_SESSION["username"] = NULL;
session_destroy();
header("location: /icnf-l/login");
