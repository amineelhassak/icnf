<?php
session_start();
if (isset($_SESSION["login"])) {
    header("location: /khalid/admin");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>login</title>
</head>

<body>

    <div class="container login-cont">
        <form action="./scripts/login_script.php" method="POST">
            <input placeholder="Username" name="username" type="text" required class="inp login-inp" />
            <input placeholder="Password" name="password" type="password" required class="inp login-inp" />
            <input type="submit" value="LOGIN" class="btn login-btn" />
        </form>
    </div>

</body>

</html>
