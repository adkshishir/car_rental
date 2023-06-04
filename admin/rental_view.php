<!-- User ko bara ma herni wala page  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="value"></div>
            </div>
            <div class="">
                <div class="label">Rented car:</div>
                <div class="value"></div>
            </div>
            <div class="">
                <div class="label">Photo:</div>
                <div class="value">
                    <img src="../uploads/" alt="car_image" class='img'>
                </div>
            </div>
        </div>
           <div>
           <div class="">
                <div class="label">Car Model number:</div>
                <div class="value"></div>
            </div>
            <div class="">
                <div class="label">Car Color:</div>
                <div class="value"></div>
            </div>
            
            <div class="">
                <div class="label">Token:</div>
                <div class="value">
                </div>
            </div>
            <div class="">
                <div class="label">Email:</div>
                <div class="value"></div>
            </div>
            <div class="">
                <div class="label">Address:</div>
                <div class="value"></div>
            </div>
            <div class="">
                <div class="label">Rented date:</div>
                <div class="value"></div>
            </div>
            <div class="">
                <div class="label">Length of days:</div>
                <div class="value"></div>
            </div>
            <div class="">
                <div class="label">Total price:</div>
                <div class="value"></div>
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
</body>
</html>