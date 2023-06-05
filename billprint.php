<?php
require 'process/user_secure.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectcar="SELECT * FROM car WHERE cid=$id";
    $carresult=mysqli_query($connect,$selectcar);
    $cararr=$carresult->fetch_assoc();
    session_start();
    include 'include/header.php';
?>
    <title>Bill Print</title>
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
    
    <!-- <====== FOOTER ======> -->
    <?php 
      include 'include/footer.php';
}
    ?>
</body>
</html>
</body>
</html>