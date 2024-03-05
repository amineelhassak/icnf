<?php
if (!isset($_POST["name"])) {
    header("location: /icnf-l/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./add-order" method="post">
        <input type="text" name="firstName" placeholder="Lirst Name" />
        <input type="text" name="lastName" placeholder="Last Name" />
    </form>
</body>

</html>