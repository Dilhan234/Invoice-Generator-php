<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Generated Invoice</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Generated Invoice
                    </div>
                    <div class="card-body">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = $_POST["name"];
                            $date = $_POST["date"];
                            $price = $_POST["price"];
                        ?>
                            <p><strong>Name:</strong> <?php echo $name; ?></p>
                            <p><strong>Date:</strong> <?php echo $date; ?></p>
                            <p><strong>Price:</strong> Rs<?php echo $price; ?></p>
                        <?php
                        } else {
                            echo "Invalid request.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
