<?php
include_once './layouts/main/header.php';

require_once './core/Database.php';

if ($_SERVER['REQUEST_METHOD'] =='POST'){
$manufacturer = $_POST['manufacturer'];
$model = $_POST['model'];
$year_made = $_POST['year_made'];
$market_price= $_POST['market_price'];






}

?>

<main class="container-fluid">
    <div class="row mt-10">
        <div class="col-7 m-auto card shadow">



            <h1 class=text-center>Admin Section</h1>
            <h1 class=>Computer Details</h1>
            <form action="" method="post" enctype="multipart/form-data">


                <div class="mb-3">
                    <label for="manufacturer">Manufacturer</label>
                    <input type="manufacturer" class="form-control" id="manufacturer" name="manufacturer" required>
                </div>

                <div class="mb-3">
                    <label for="model">Model</label>
                    <input type="model" class="form-control" id="model" name="model" required>


                </div>

                <div class="mb-3">
                    <label for="year_made">year made</label>
                    <input type="year_made" class="form-control" id="year_made" name="year_made" required>


                </div>



                <div class="mb-3">
                    <label for="market_price">Market Price</label>
                    <input type="market_price" class="form-control" id="market_price" name="market_price" required>


                </div>
                <div class="mb-3">
                    <input type="submit" class="ms-auto btn btn-lg btn-primary" value="Add" name="submit">
                </div>



            </form>

</main>

<?php

include_once "./layouts/main/footer.php";

?>