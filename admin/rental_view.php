<!-- User ko bara ma herni wala page  -->
<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
    if(isset($_GET['id'])){
        $cid=$_GET['id'];
        $selectorder="SELECT * FROM orders WHERE cid='$cid'";
        $orderresult=mysqli_query($connect,$selectorder);
        $orderarr=$orderresult->fetch_assoc();

            $uid = $orderarr['uid'];
            $selectusr = "SELECT * FROM users WHERE uid= $uid";
            $selectrslt = mysqli_query($connect, $selectusr);
            $usrarr = $selectrslt->fetch_assoc();

            $selectcar = "SELECT * FROM car WHERE cid = $cid";
            $carresult = mysqli_query($connect, $selectcar);
            $carlist = $carresult->fetch_assoc();
            $time = explode(" ", $orderarr['date']);
            $date = explode("-", $time[0]);
?>
    <title>Rental view</title>
    <link rel="stylesheet" href="../asserts/css/style.css"
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
    <h1>Rental details</h1>
        <section>
         <div class='car-collection'>
         <div>
           <div class="">
                <div class="label">Rented by:</div>
                <div class="value"><?php echo $usrarr['name'];?></div>
            </div>
            <div class="">
                <div class="label">Rented car:</div>
                <div class="value"><?php echo $carlist['name'];?></div>
            </div>
            <div class="">
                <div class="label">Photo:</div>
                <div class="value">
                    <img src="../uploads/<?php echo $carlist['photo'];?>" alt="car_image" class='img'>
                </div>
            </div>
        </div>
           <div>
           <div class="">
                <div class="label">Car Model number:</div>
                <div class="value"><?php echo $carlist['model'];?></div>
            </div>
            <div class="">
                <div class="label">Car Color:</div>
                <div class="value"><?php echo $carlist['color'];?></div>
            </div>
            
            <div class="">
                <div class="label">Token:</div>
                <div class="value"><?php echo $orderarr['token'];?></div>
            </div>
            <div class="">
                <div class="label">Email:</div>
                <div class="value"><?php echo $usrarr['email'];?></div>
            </div>
            <div class="">
                <div class="label">Address:</div>
                <div class="value"><?php echo $usrarr['address'];?></div>
            </div>
            <div class="">
                <div class="label">Rented date:</div>
                <div class="value"><?php echo $orderarr['date'];?></div>
            </div>
            <div class="">
                <div class="label">Length of days:</div>
                <div class="value"><?php echo $orderarr['lob'];?></div>
            </div>
            <div class="">
                <div class="label">Expired date:</div>
                <div class="value"><?php echo $date[0]."-".$date[1]."-".($date[2]+$orderarr['lob']);?></div>
            </div>
            <div class="">
                <div class="label">Total price:</div>
                <div class="value"><?php echo "$" . ($carlist['price'] * $orderarr['lob']); ?></div>
            </div>
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