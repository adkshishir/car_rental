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
<div class='admin-body'>
<header class="admin-header white">
        <center>
          <h1 class="title">Admin Dashboard</h1>

          <nav class=" ">
            <ul class="" style="list-style: none">
              <li class='nav-element'>Dashboard</li>
              <li class='nav-element'>Car register</li>
            </ul>
          </nav>
          <div class=" admin-dropdown">
        <button class="button button-green">Profile</button>
        <div class="dropdown-content">
          <?php
          if(isset($_SESSION['email'])){
            ?>
            <a class="dropdown-item" href="process/logout.php">Logout</a>
          <?php
          }else{
          ?>
          <a class="dropdown-item" href="user_login.php">Login</a>
          <a class="dropdown-item" href="user_register.php">Sign Up</a>
          <?php
          }
          ?>
        </div>
      </div>
        </center>
      </header>
    <main class='admin-main white'>
        <section class='car-collection '>
        <div>
          <div class="name">
                <div class="label">Car Name: </div>
                <div class="value"><?php echo $cararr['name'];?></div>
            </div>

            <div class="name">
                <div class="label">Photo: </div>
                <div class="value"><img src="../uploads/<?php echo $cararr['photo'];?>" alt="car_image" class='img'></div>
            </div>

        </div>
          <div>
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
        </div>
        </section>
    </main>
</div>
<footer class="footer admin-footer">
      <div>
        <p style="color: white">&copy;2023 Ezy Rental .All rights reserved.</p>
     
      </div>
    </footer>
    <?php
    }
    ?>
</body>
</html>