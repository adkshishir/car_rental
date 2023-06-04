<!-- User ko bara ma herni wala page  -->
<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
    if(isset($_GET['id'])){
        $uid=$_GET['id'];
        $selectusr="SELECT * FROM users WHERE uid='$uid'";
        $usrresult=mysqli_query($connect,$selectusr);
        $usrarr=$usrresult->fetch_assoc();
?>
    <title>User view</title>
</head>
<body>
    <header>
        <h1>User details
        </h1>
    </header>
    <main>
        <section>
            <div class="name">
                <div class="label">Name:</div>
                <div class="value"><?php echo $usrarr['name'];?></div>
            </div>
            <div class="email">
                <div class="label">Email:</div>
                <div class="value"><?php echo $usrarr['email'];?></div>
            </div>
            <div class="contact">
                <div class="label">Contact:</div>
                <div class="value"><?php echo $usrarr['contact'];?></div>
            </div>
            <div class="address">
                <div class="label">Address:</div>
                <div class="value"><?php echo $usrarr['address'];?></div>
            </div>
        </section>
    </main>
    <?php 
    }
    ?>
</body>
</html>