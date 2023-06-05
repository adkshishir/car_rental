<?php
    require 'process/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login page</title>
    <link rel="stylesheet" href="asserts/css/style.css"/>
</head>

<body>
<header class='main-header register-header'>
    <h1 class='title'> Ezy Rental </h1>
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
    <header class='main-header'>
        
    </header>
    <main >
    <center>
            
            <?php
            if(isset($_GET['msg'])){
                ?>
            <div class="msg"><?php echo $_GET['msg'];?></div>
            <?php
            }
            ?>
</center>
        <section class="car-collection">
        
       <div>
       <h2>Login Page</h2>
            <form action="#" method="post" onsubmit="return validationForm_login()">
                <?php
                if (isset($_POST['submit'])) {
                    $email = $_POST['username'];
                    $password = $_POST['password'];
                    $password = md5($password);
                    $emailCheck = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                    $emailCount = mysqli_query($connect, $emailCheck);
                    $arr = $emailCount->fetch_assoc();
                    $count = mysqli_num_rows($emailCount);
                    if ($count == 1) {

                        session_start();
                        $_SESSION['email'] = $arr['email'];
                        $_SESSION['id'] = $arr['uid'];
                        $_SESSION['role'] = $arr['status'];

                        if ($arr['status'] == 'a') {
                ?>
                            <script>
                                location.replace("admin/index.php");
                            </script>
                        <?php
                        } else {
                        ?>
                            <script>
                                location.replace("index.php");
                            </script>
                <?php
                        }
                    }
                    else{
                      
                      echo "Enter correct email and password";
                      
                    }
                }
                ?>
                <div class="email">
                    <label for="email">Enter your email:
                    </label><br/>
                    <input type="text" name="username" id="email" placeholder="Email...">
                    <div id='emailError' class='error'></div>
                    
                </div>
                <div class="pass">
                    <label for="password">Enter your password:</label><br/>
                    <input type="password" name="password" id="password" placeholder="password...">
                    <div id='passwordError' class='error'></div>
                </div>
                <div class="submit">
                    <button type="submit" name="submit" class='button button-blue'>Submit</button>
                </div>
            </form>
            <div class="link">
                <div>Don't have account: <a href="user_register.php">create new</a>
                </div>
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
    <script src='asserts/js/validation_login.js'>
    </>
</body>

</html>