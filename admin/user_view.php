<!-- User ko bara ma herni wala page  -->
<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
    if(isset($_GET['id'])){
        $uid=$_GET['id'];
        $selectusr="SELECT * FROM users WHERE uid='$uid'";
        $usrresult=mysqli_query($connect,$selectusr);
        $usrarr=$usrresult->fetch_assoc();
?>
    <title>User view</title>
</head>
<body>
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
    <h1>User details
        </h1>
        <section>
            <div class="name">
                <div class="label">Name:</div>
                <div class="value"><?php echo $usrarr['name'];?></div>
            </div>
            <div class="email">
                <div class="label">Email:</div>
                <div class="value"><?php echo $usrarr['email'];?></div>
            </div>
            <div class="contact">
                <div class="label">Contact:</div>
                <div class="value"><?php echo $usrarr['contact'];?></div>
            </div>
            <div class="address">
                <div class="label">Address:</div>
                <div class="value"><?php echo $usrarr['address'];?></div>
            </div>
        </section>
    </main>
    <?php 
    }
    ?>
</body>
</html>