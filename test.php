<?php
    require 'ada.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <h3 class="text-center text-light bg-info p-2">asdasd</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h5>Filter</h5>
                <hr>
                <h6 class="text-info">Select brand</h6>
                <ul class="list-group">
                <?php
                    $sql = "SELECT DISTINCT brand FROM products ORDER BY brand";
                    $result = $conn->query($sql);
                    while ($row=$result->fetch_assoc()){
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-label product_chcek" 
                            value="<?= $row['brand']; ?>" id="brand"><?= $row['brand']; ?>
                        </label>
                    </div>
                </li>
                <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <h5 class="text-center" id="textChange">
                    All Products
                </h5>
                <hr>
                <div class="row" id="results">
                <?php 
                $sql="SELECT * FROM products";
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc()){
                ?>
                <div class="col-md-3 mb-2">
                    <div class="card-deck">
                        <div class="card border-secondary">
                            <h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1"><?= $row['product_name']; ?></h6>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-danger">Price :
                                <?=$row['product_price']; ?> /-
                            </h4>
                            <p>
                                BRAND : <?= $row['brand']; ?><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>