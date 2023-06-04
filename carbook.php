<?php
require 'process/user_secure.php';
require 'process/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectcar="SELECT * FROM car WHERE cid='$cid'";
    $cararr=mysqli_query($connect,$selectcar);

    $insertresult=0;
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
    <center><h2>Book your car</h2></center>
</header>
<main>
    <?php
    if($insertresult){
        ?>
    <section class="print">
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
    </section>
    <?php
    }
    ?>
    <section>
        <div class="name">
            <div class="label">Car Name:</div>
            <div class="value"><?php echo $cararr['name'];?></div>
        </div>
        <div class="photo">
            <div class="label">Car Photo:</div>
            <div class="value"><img src="<?php echo $cararr['photo'];?>" alt="car_photo"></div>
        </div>
        <div class="model">
            <div class="label">Car model:</div>
            <div class="value"><?php echo $cararr['model'];?></div>
        </div>
        <div class="color">
            <div class="label">Car Color:</div>
            <div class="value"><?php echo $cararr['color'];?></div>
        </div>
        <div class="price">
            <div class="label">Car Price(per day): $</div>
            <div class="value"><?php echo $cararr['price'];?></div>
        </div>
        <div class="description">
            <div class="label">Car description:</div>
            <div class="value"><?php echo $cararr['description'];?></div>
        </div>
        
        <form action="#" method="post">
            <?php
                if(isset($_POST['submit'])){
                    $lob=$_POST['lob'];
                    if(!empty($lob)){
                        $token=rand(10000,99999);
                        $emlarr=explode("@",$_SESSION['email']);
                        $token=$emlarr[0].$token.$_SESSION['id'].$cararr['model'];
                        $uid=$_SESSION['id'];
                        $insert="INSERT INTO orders(uid,cid,lob,token) VALUES('$uid','$id','$lob','$token')";
                        $insertresult=mysqli_query($connect,$insert);
                        if(!($insertresult)){
                                echo "Try again.";
                        }
                    }
                }
            ?>
            <div>
                <label for="lob"><span class="error">*</span>Enter length of booking(days):</label>
                <input type="number" name="lob" id="lob">
            </div>
            <div>
                <button type="submit" name="submit"></button>
            </div>
        </form>
    </section>
</main>
    <?php
}
else{
    echo "First choose a car.";
}
    ?>
    </body>

    </html>