<!-- Car ko description herni wala page  -->
<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
    if(isset($_GET['id'])){
        $cid=$_GET['id'];
        $selectcar="SELECT * FROM car WHERE cid='$cid'";
        $carresult=mysqli_query($connect,$selectcar);
        $cararr=$carresult->fetch_assoc();
?>
    <title>View Car</title>
</head>
<body>
    <header>
        <h2>The details of the car:</h2>
    </header>
    <main>
        <section>
            <div class="name">
                <div class="label">Car Name: </div>
                <div class="value"><?php echo $cararr['name'];?></div>
            </div>

            <div class="name">
                <div class="label">Photo: </div>
                <div class="value"><img src="../uploads/<?php echo $cararr['photo'];?>" alt="car_image"></div>
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

            <div class="name">
                <div class="label">Description: </div>
                <div class="value"><?php echo $cararr['description'];?></div>
            </div>
        </section>
    </main>
    <?php
    }
    ?>
</body>
</html>