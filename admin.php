<?php
session_start();
if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
    header("location: /icnf-l/login");
}
include_once("./db/connect.php");
$records = 10;
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$cursor = ($page - 1) * $records;
$sql = "SELECT * FROM `order` LIMIT $cursor, $records";
$res = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style/admin.css">
    <title>Admin</title>
</head>

<body>
    <!-- <div class="dashboard">
        <div class="left">
            <div class="title">
                Welcome <?php echo $_SESSION["username"] ?>
            </div>
            <div>

            </div>
            <form action="./scripts/logout.php" method="post">
                <input type="submit" class="logout-btn" value="LOGOUT" />
            </form>

        </div> -->

    <!--  -->
    <div class="body">
        <div class="div1">
            <form action="./scripts/logout.php">
                <img src="./icon1.svg" alt="icon1" />
                <button type="submit" class="btnn">Logout</button>
            </form>
            <div class="logo">
                <h1>ICNF</h1>
                <span>2024</span>
            </div>
        </div>
        <div class="div2">
            <h4 class="orders">Orders</h4>
            <div class="forme">
                <div class="title1">Latest Orders</div>
                <table id="x" class="table">
                    <thead>
                        <tr id="tr1">
                            <th></th>
                            <th scope="col">id</th>
                            <th scope="col">cin</th>
                            <th scope="col">date</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">payment screen</th>
                            <th scope="col">document</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['cin'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['customer'] . "</td>";
                            echo "<td><a href='" . substr($row['screenshot'], 1) . "' download>Download Screenshot</a></td>";
                            echo "<td><a href='" . substr($row['document'], 1) . "' download>Download Signature</a></td>";
                            echo '<td>
                                <button id = "' . $row["id"] . '" type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </button>
                            </td>';
                            echo "</tr>";
                        }

                        echo "</table>";
                        ?>
                    </tbody>
                </table>
                <nav class="nav-u" aria-label="...">
                    <ul class="pagination justify-content-center pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">3</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        yes
                    </button>
                    <button type="button" class="btn btn-">no</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
</body>

</html>