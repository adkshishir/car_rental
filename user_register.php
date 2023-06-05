<?php
// include 'include/header.php';
session_start();
require 'process/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asserts/css/style.css" />
    <title>Register</title>
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
            $uid=$_SESSION['id'];
            $selectusr="SELECT name FROM users WHERE uid = $uid";
            $usrresult=mysqli_query($connect,$selectusr);
            $usrarr=$usrresult->fetch_assoc();
            ?>
            <div><?php echo $usrarr['name'];?></div>
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
    <main>
        <section  class='car-collection'>
      <div >
      <h2>registration Form</h2>
            <form action="#" method="post" onsubmit='return validationForm_userRegistation()'>
            
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $role=$_POST['role'];
                    $contact = $_POST['contact'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    $conpass = $_POST['conpass'];
                    if(empty($role)){
                        $role='l';
                    }
                    #email checking starts here
                    $emailcount = 0;
                    if (!empty($email)) {
                        $select = "SELECT email FROM users where email='$email'";
                        $emailcheck = mysqli_query($connect, $select);
                        $emailcount = mysqli_num_rows($emailcheck);
                        if ($emailcount != 0) {
                            echo "* Email already exists in database";
                        }
                    }
                    #email checking ends here

                    if ((!empty($name)) && (!empty($email)) && (!empty($contact)) && (!empty($address)) && (strlen($password) >= 4) && ($password == $conpass) && ($emailcount == 0)) {
                        $password = md5($password);
                        $insert = "INSERT INTO users (name,email,status,contact,address,password) VALUES('$name','$email','$role','$contact','$address','$password')";
                        $result = mysqli_query($connect, $insert);
                        if ($result) {
                            if (isset($_SESSION['id'])) {
                ?>
                                <script>
                                    history.back();
                                </script>
                            <?php
                            } else {
                            ?>
                                <script>
                                    location.replace("user_login.php");
                                </script>
                <?php
                            }
                        }
                    } else {
                        ?>
                        <div class="error"><?php echo "Doesn't created";?></div>
                        <?php
                    }
                }
                ?>
                <div class="name">
                    <label for="name"><span class="error">*</span>Name:</label></br>
                    <input type="text" name="name" id="name" placeholder="Name.."><br />
                    <div id='nameError' class='error'></div>
                </div>
                <div class="email">
                    <label for="email"><span class="error">*</span>Email:</label></br>
                    <input type="email" name="email" id="email" placeholder="Email.."><br />
                    <div id='emailError' class='error'></div>

                </div>
                <?php 
                    if(isset($_SESSION['role'])){
                        if($_SESSION['role']=='a'){
                            ?>
                                <div class="role">
                                    <label for="status">Enter the role:</label>
                                    <select name="role" id="status">
                                        <option value="a">Admin</option>
                                        <option value="l" selected>Local user</option>
                                    </select>
                                </div>
                            <?php
                        }
                    }
                ?>
               <div >
               <div class="address">
                    <label for="address"><span class="error">*</span>Address:</label></br>
                    <input type="text" name="address" id="address" placeholder="Address"><br />
                    <div id='addressError' class='error'></div>

                </div>
                <div class="contact">
                    <label for="contact"><span class="error">*</span>Contact:</label></br>
                    <input type="text" name="contact" id="contact" placeholder="Contact.."><br />
                    <div id='contactError' class='error'></div>

                </div>
            </div>
                <div class="pass">
                    <label for="password"><span class="error">*</span>Password:</label></br>
                    <input type="password" name="password" id="password" placeholder="Password.." require><br />
                    <div id='passwordError' class='error'></div>

                </div>
                <div class="conpass">
                    <label for="conpass"><span class="error">*</span>Confirm Password:</label></br>
                    <input type="password" name="conpass" id="conpass" placeholder="Confirm" require>
                    <div id='conpassError' class='error'></div>

                </div>
                <div class="submit">
                    <button type="submit" name="submit" class="button button-blue">Submit</button>
                </div>
            </form>
            <div class="link">
                <div>Already have account: <a href="user_login.php">Login</a>
                </div>
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
    <script src='asserts/js/validation_userRegistration.js'>
    </script>
     <script src='asserts/js/toggleNav.js'> </script>
</body>

</html>