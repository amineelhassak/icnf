<?php
if (!isset($_POST["type"])) {
    header("location: /icnf-l/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/checkout.css">

    <title>checkout</title>
</head>

<body class="body-check">

    <div class="container card-conts">
        <div class="left">
            <div>
                <img class="card-logo" src="./assets/icons/icon1.svg" alt="" srcset="">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <?php echo $_POST["type"]; ?>
                </div>
                <div class="desc">
                    Offre : <?php echo $_POST["type"]; ?>
                </div>
                <div class="price">
                    <p>total : </p>
                    <h1>€ <?php echo $_POST["total"]; ?></h1>
                </div>
                <form class="card-form">
                    <div class="inp-group">
                        <input class="fname" type="text" required placeholder="First name" />
                        <input class="lname" type="text" required placeholder="Last name" />
                    </div>
                    <input class="cne" type="text" required placeholder="CNE" />
                </form>
            </div>

        </div>
        <div class="right">
            <div class="div">
                <h1>TOTAL</h1>
            </div>
            <div class="div">
                <?php

                if (isset($_POST["450"]) && $_POST["type"] == "Before 10th May 2024")
                    echo "<div class='elem'>
                    <p>Regular Participants</p>
                    <p>€ 450</p>
                    </div>";
                if (isset($_POST["70"]) && $_POST["type"] == "Before 10th May 2024")
                    echo "<div class='elem'>
                    <p>Social Event</p>
                    <p>€ 70</p>
                    </div>";
                if (isset($_POST["300"]) && $_POST["type"] == "Before 10th May 2024")
                    echo "<div class='elem'>
                    <p>Student</p>
                    <p>€ 300</p>
                    </div>";
                if (isset($_POST["200"]) && $_POST["type"] == "Before 10th May 2024")
                    echo "<div class='elem'>
                    <p>Accompanying person</p>
                    <p>€ 200</p>
                    </div>";

                //the other one
                if (isset($_POST["550"]) && $_POST["type"] == "From 15th June 2024")
                    echo "<div class='elem'>
                    <p>Regular Participants</p>
                    <p>€ 550</p>
                    </div>";
                if (isset($_POST["70"]) && $_POST["type"] == "From 15th June 2024")
                    echo "<div class='elem'>
                    <p>Social Event</p>
                    <p>€ 70</p>
                    </div>";
                if (isset($_POST["400"]) && $_POST["type"] == "From 15th June 2024")
                    echo "<div class='elem'>
                    <p>Student</p>
                    <p>€ 400</p>
                    </div>";
                if (isset($_POST["200"]) && $_POST["type"] == "From 15th June 2024")
                    echo "<div class='elem'>
                    <p>Accompanying person</p>
                    <p>€ 200</p>
                    </div>";
                ?>
            </div>
            <div class="div">
                <div class="elem">
                    <p>Total</p>
                    <p class="total">€ <?php echo $_POST["total"]; ?></p>
                </div>
            </div>
            <di class="btns-group">
                <button class="download">DOWNLOAD</button>
                <button class="upload">UPLOAD</button>
        </div>
    </div>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div>
                <form action="./scripts/add_order.php" method="post">
                    <h1>UPLOAD FILES</h1>
                    <div>
                        <input type="text" required placeholder="Name">
                        <input type="text" required placeholder="CIN">
                        <div>
                            <label for="choose-file" class="chose">Upload Signature</label>
                            <input name="signature" type="file" id="choose-file" accept=".pdf,doc,docx" style="display: none;" />
                        </div>
                        <div>
                            <label for="choose-files" class="chose">Upload Payment screenshot</label>
                            <input name="screenshot" type="file" id="choose-files" accept=".png,.jpeg,.jpg" style="display: none;" />
                        </div>
                    </div>
                    <button type="submit">SEND</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
    <script src="./script.js"></script>
    <script type="text/javascript">
        var data = <?php echo json_encode($_POST) ?>;
    </script>
    <script src="./checkout.js"></script>
</body>

</html>