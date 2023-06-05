<?php include 'include/header.php';?>
    <title>About us</title>
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
    <main class=" about-all">
      
    <center>  <h1 class='contact-section-title'>About Ezy Rentals</h1></center>
      <br />
      <h2 class='contact-section-title'>Welcome to Ezy Rentals</h2>
      <p class='contact-section-desc'>
        Ezy Car Rentals is a leading car rental company,providing reliable and
        the afforable car in rent to the customers with in the Australia. With a
        wide selection of the cars and convenients cars options avalible in
        rent, we are here to full fill your demand .We offer various rental cars
        of your choice.
      </p>
      <h2 class='contact-section-title'>Our Specialities</h2>
      <p class='contact-section-desc'>
        We offer a variery of cars to suit every once budget and we take care of
        experience of the customers . From compact cars for city explorations to
        all family adventures, our aim is carefully maintained to ensure comfort
        ,safety, and the style.
      </p>
      <h2 class='contact-section-title'>Exceptional Customers Services</h2>
      <p class='contact-section-desc'>
        At ezy Rentals, we prioritize customers satisfation and track the
        experience of the cusotmers.Our friendly and knowledeable staff are
        dedicated to providing exceptional service , assisting you with vehicle
        selections ,rental process, and the addressing any queries that you may
        have. Your comfort and peace of mind are our top priorities.
      </p>
      <h2 class='contact-section-title'>Book Your Rental Today</h2>
      <p class='contact-section-desc'>
        experience the convenience and freedom of renting a car with Ezy
        Rentals.Start your journey with our cars make your and make our days .
        Get cars from one of our branches that are located near to you location
        .We look forward to serving you and making your rental experience
        unforgettable.
      </p>
    </main>
    
    <!-- <====== FOOTER ======> -->
    <?php 
      include 'include/footer.php';
    ?>
 <script src='asserts/js/toggleNav.js'> </script>
  </body>
</html>
