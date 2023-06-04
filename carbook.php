<?php
require 'process/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectcar="SELECT * FROM car WHERE cid='$cid'";
    $cararr=mysqli_query($connect,$selectcar);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Car / Book</title>
    </head>

    <body>
<header>

</header>
    <?php
}
    ?>
    </body>

    </html>