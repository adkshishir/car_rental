<!-- Car ko description herni wala page  -->
<?php
    include 'include/header.php';
    if(isset($_GET['id'])){
        $cid=$_GET['id'];
        $selectcar="SELECT * FROM car WHERE cid='$cid'";
        $carresult=mysqli_query($connect,$selectcar);
        $cararr=$carresult->fetch_assoc();
?>
        <title>Car / View</title>
    </head>
<body>
<button onclick='toggleNav()' class='button btn-circle'>Menu</button>
    <header class="main-header nav-menu active" id='navMenu' >
      <h1 class="title">Ezy Rentals</h1>
      <div class='search-box'>
        <input type="text" placeholder="Search" />
        <button
          class="button button-blue"
        >
          Search
        </button>
      </div>
      <nav class="nav nav-bar">
        <ul class="nav nav-ul nav-sticky">
          <li class="nav-element">Home</li>
          <li class="nav-element">About</li>
          <li class="nav-element">Contact</li>
          <!-- <li class="nav-element">Home</li> -->
        </ul>
      </nav>
      <div class="dropdown">
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
    </header>
    <h2>Details of the cars</h2>
    <main>
        <section class='car-collection'>
          <div class='car-detail'>
          <div class="name">
                <div class="label">Car Name: </div>
                <div class="value"><?php echo $cararr['name'];?></div>
            </div>

            <div class="name">
                <div class="label">Photo: </div>
                <div class="value"><img src="uploads/<?php echo $cararr['photo'];?>" alt="car_image" class='img'></div>
            </div>

          </div>
           <div class='car-detail' style='max-width:600px;'>
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
                <div class="label" style='max-width:300px;'>Description: </div>
                <div class="value"><?php echo $cararr['description'];?></div>
            </div>
           </div>
        </section>
    </main>
    
    <!-- <====== FOOTER ======> -->
    <?php 
      include 'include/footer.php';
    ?>
 <script src='asserts/js/toggleNav.js'> </script>
    <?php
    }
    ?>
</body>
</html>