<?php 
    require 'process/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
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

    <main class="form-section">
      <section>
        <h1 class="contact-section-title">Get in Touch</h1>
        <p class="contact-section-desc">
          fill out the form to get in touch with us .<br />We will response as
          fast as possible
        </p>
      </section>
      <section>
        <div>
          <form method="POST" action="#">
            <?php
              if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $message=$_POST['message'];
                $insertmsg="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
                $resultmsg=mysqli_query($connect,$insertmsg);
              }
            ?>
            <h2>Contact Us</h2>
            <div>
              <label for="name">Name:</label><br />
              <input type="text" id="name" name="name" required />
            </div>

            <div>
              <label for="email">Email:</label><br />
              <input type="email" id="email" name="email" required />
            </div>

            <div>
              <label for="message">Message:</label><br />
              <textarea id="message" name="message" required></textarea>
            </div>

            <div>
              <input type="submit" name="submit" value="Submit" />
            </div>
          </form>
        </div>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
