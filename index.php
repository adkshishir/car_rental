<?php 
session_start();
$sstatus=0;
  include 'include/header.php';
?>
    <title>Ezy Rentals</title>
  </head>
  <body>
    <button onclick='toggleNav()' class='button btn-circle'>Menu</button>
    <header class="main-header nav-menu active" id='navMenu' >
      <h1 class="title">Ezy Rentals</h1>
      <form action="#" method="post">
        <?php
            if(isset($_POST['submit'])){
              $search=$_POST['search'];
              if(!empty($search)){
                $sstatus=1;
              }
            }
        ?>
      <div class='search-box'>
        <input type="text" name="search" placeholder="Search" />
        <button class="button button-blue" type="submit" name="submit">
          Search
        </button>
      </div>
      </form>
      <nav class="nav ">
        <ul class="nav nav-ul ">
          <li class="nav-element"><a href="index.php">Home</a></li>
          <li class="nav-element"><a href="about.php">About</a></li>
          <li class="nav-element"><a href="contact.php">Contact</a></li>
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
    <main class="main">
      <?php
        if(!$sstatus){
          $select="SELECT * FROM car";
          
        }else{
          $select="SELECT * FROM car WHERE name LIKE '%$search%'";
        }
        ?>
      <h1 class="car-collection">some category</h1>
      <section class="car-collection">
        <?php 
        $selectresult=mysqli_query($connect,$select);
        while($cararr=$selectresult->fetch_assoc()){
          ?>
        <div class="car-detail">
          <h2>Name: <?php echo $cararr['name'];?></h2>
          <img src="uploads/<?php echo $cararr['photo'];?>" class='img-small' />
          <h3 class='car-desc'>Model: <?php echo $cararr['model'];?></h3>
          
            <h3>Price/day: $<?php echo $cararr['price'];?></h3>
          
            <h3> status: <?php echo ($cararr['status']=='u')?"Not book":"Booked";?></h3>
        
          <div>
            <a href="carview.php?id=<?php echo $cararr['cid'];?>"><button class="button button-green">view more</button></a>
            <?php 
              if($cararr['status']=='u'){
            ?>
            <a href="carbook.php?id=<?php echo $cararr['cid'];?>"><button class="button button-blue">book Now</button></a>
            <?php 
              }
              ?>
          </div>
        </div>
        <?php 
        }
        ?>
      </section>
    </main>
    
    <!-- <====== FOOTER ======> -->
    <?php 
      include 'include/footer.php';
    ?>
    <script src='asserts/js/toggleNav.js'> </script>
  </body>
</html>
