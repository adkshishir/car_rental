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
<<<<<<< HEAD
    <title>Bill Print</title>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill print</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asserts/css/style.css">
>>>>>>> f276f021f7b8e063e71b24c37882a34bf6adb542
</head>
<body>
<header class="main-header nav-menu active none-printable" id='navMenu' >
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
    <section id="print" class='print-section car-collection'>
        <!-- yo user lai download garna dini wala file ho hai. -->
       <div class='car-detail'> <div class="name">
                <div class="label">User ID: </div>
                <div class="value"><?php echo $_SESSION['id'];?></div>
            </div>
        <div class="name">
                <div class="label ">Car id: </div>
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
            </div></div>
            
    </section>
<<<<<<< HEAD
    
    <!-- <====== FOOTER ======> -->
    <?php 
      include 'include/footer.php';
=======
  <center>  <button class='button button-blue non-printable ' onclick="billPrint()">Print</button></center>
<script src='asserts/js/billPrint.js'></script>
    <?php
>>>>>>> f276f021f7b8e063e71b24c37882a34bf6adb542
}
    ?>
</body>
</html>
</body>
</html>