<header class="admin-header white">
      <center>
        <h1 class="title">Ezy Rental</h1>
        <h2>Admin </h2>
        <nav class="">
          <ul class=" admin-nav-ul" style="list-style: none">
            <li class='admin-nav-element'><a href="index.php">Dashboard</a></li>
            <li class='admin-nav-element'><a href="../user_register.php">User register</a></li>
            <li class='admin-nav-element'><a href="car_register.php">Car register</a></li>
            <li class='admin-nav-element'><a href="user_overview.php">User Overview</a></li>
            <li class='admin-nav-element'><a href="rental_overview.php">Rental Overview</a></li>
            <li class='admin-nav-element'><a href="car_overview.php">Car Overview</a></li>
          </ul>
        </nav>
        <div class=" admin-dropdown">
          <img src="../uploads/profile.png" alt="logo" class='img-circle'>
          <div class="dropdown-content">
            <?php
            if (isset($_SESSION['email'])) {
            ?>
            <div class="dropdown-name"><?php echo $_SESSION['name'];?></div>
              <a class="dropdown-item" href="../process/logout.php">Logout</a>
            <?php
            } else {
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