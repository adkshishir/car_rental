<?php
require '../process/db.php';
require '../process/admin_secure.php';
include '../include/admin_header.php';
?>
<title>User Overview</title>
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
        <h3>Ezy Users</h3>
        <section class='car-collection'>
            <table>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php 
                    $i=0;
                    $selectusr="SELECT * FROM users";
                    $usrresult=mysqli_query($connect,$selectusr);
                    while($usrarr=$usrresult->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $usrarr['name'];?></td>
                    <td><?php echo $usrarr['email'];?></td>
                    <td><?php echo ($usrarr['status']=='a')?"Admin":"Local User";?></td>
                    <td><a href="user_view.php?id=<?php echo $usrarr['uid'];?>"><button class='button button-green'>View more</button></a>
                    </td>
                </tr>
                <?php 
                    }
                    ?>
            </table>
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