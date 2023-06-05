<header class="main-header nav-menu active" id='navMenu' >
      <h1 class="title"><a href="index.php">Ezy Rentals</a></h1>
      <?php 
      if($_SERVER["PHP_SELF"]=="/car_rental/index.php"){
        ?>
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
      <?php
      }
      ?>
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