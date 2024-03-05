<?php
session_start();
if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
    header("location: /icnf-l/login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/admin.css">
    <title>Admin</title>
</head>

<body>
    <div class="dashboard">
        <div class="left">
            <div class="title">
                Welcome <?php echo $_SESSION["username"] ?>
            </div>
            <div>

            </div>
            <form action="./scripts/logout.php" method="post">
                <input type="submit" class="logout-btn" value="LOGOUT" />
            </form>

        </div>
        <div class=" right">

        </div>
    </div>
</body>

</html>