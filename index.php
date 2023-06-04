<?php 
  require 'process/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ezy Rentals</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="asserts/css/style.css" />
  </head>
  <body>
    <button onclick='toggleNav()' class='button btn-circle'>Menu</button>
    <header class="main-header nav-menu active" id='navMenu' >
      <h1 class="title">Ezy Rentals</h1>
      <div>
        <input type="text" placeholder="Search" /><button
          class="button button-green"
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
          if(isset($_SESSION['id'])){
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
      <h1 class="car-collection">some category</h1>
      <section class="car-collection">
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
      </section>
      <h1 class="car-collection">some category</h1>
      <section class="car-collection">
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>

        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
      </section>
      <section></section>
      <h1 class="car-collection">some category</h1>
      <section class="car-collection">
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
        <div class="car-detail">
          <img src="some image" />
          <h2>name</h2>
          <h3>model</h3>
          <div class="nav">
            <h3>price per day</h3>
            //
            <h3>boooked indicator</h3>
          </div>
          <div>
            <button class="button button-green">view more</button>
            <button class="button button-blue">book Now</button>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div>
        <p style="color: white">&copy;2023 Ezy Rental .All rights reserved.</p>
        <ul class="footer-nav">
          <li>
            <a href="index.html">Home</a>
          </li>
          <a href="about.html"> About</a>
          <a href="contact.html"> Contact</a>
        </ul>
      </div>
      <iframe
        frameborder="0"
        src="https://www.google.com/maps/embed/v1/place?q=Sydney+NSW,+Australia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
      ></iframe>
    </footer>
    <script src='asserts/js/toggleNav.js'> </script>
  </body>
</html>
