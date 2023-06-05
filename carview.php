<!-- Car ko description herni wala page  -->
<?php
    require 'process/db.php';
    if(isset($_GET['id'])){
        $cid=$_GET['id'];
        $selectcar="SELECT * FROM car WHERE cid='$cid'";
        $carresult=mysqli_query($connect,$selectcar);
        $cararr=$carresult->fetch_assoc();
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Car / View</title>
        <link rel="stylesheet" href="asserts/css/style.css">
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
    <footer class="footer">
    
    <div class='left-footer'>
     <p style="color: white">&copy;2023 Ezy Rental .All rights reserved.</p>
     <ul class="">
       <li>
         <a href="index.php">Home</a>
       </li>
      <li> <a href="about.php"> About</a></li>
      <li> <a href="contact.php"> Contact</a></li>
     </ul>
   </div>
   <iframe
     frameborder="0"
     src="https://www.google.com/maps/embed/v1/place?q=Sydney+NSW,+Australia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
   ></iframe>
 </footer>
 <script src='asserts/js/toggleNav.js'> </script>
    <?php
    }
    ?>
</body>
</html>