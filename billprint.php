<?php
session_start();
require 'process/user_secure.php';
require 'process/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectcar="SELECT * FROM car WHERE cid=$id";
    $carresult=mysqli_query($connect,$selectcar);
    $cararr=$carresult->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="print">
        <!-- yo user lai download garna dini wala file ho hai. -->
        <div class="name">
                <div class="label">User ID: </div>
                <div class="value"><?php echo $_SESSION['id'];?></div>
            </div>
        <div class="name">
                <div class="label">Car id: </div>
                <div class="value"><?php echo $cararr['cid'];?></div>
            </div>
        <div class="name">
                <div class="label">Car Name: </div>
                <div class="value"><?php echo $cararr['name'];?></div>
            </div>

            <div class="name">
                <div class="label">Car model: </div>
                <div class="value"><?php echo $cararr['model'];?></div>
            </div>

            <div class="name">
                <div class="label">Car Color: </div>
                <div class="value"><?php echo $cararr['color'];?></div>
            </div>

            <div class="name">
                <div class="label">Price per day($): </div>
                <div class="value"><?php echo $cararr['price'];?></div>
            </div>
            <div class="total_price">
                <div class="label">Total price: </div>
                <div class="value"><?php echo ($cararr['price']* $lob);?></div>
            </div>
            <div class="token">
                <div class="label">Token: </div>
                <div class="value"><?php echo $token;?></div>
            </div>
            <button>Print</button>
    </section>
    <?php
}
    ?>
</body>
</html>
</body>
</html>