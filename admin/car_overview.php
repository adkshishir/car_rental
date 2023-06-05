<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
?>
    <title>Car Overview</title>
    
</head>
<body>
<div class='admin-body'>
<header class="admin-header white">
      <center>
        <h1 class="title">Ezy Rental</h1>
   <h2>Admin </h2>
        <nav class="">
          <ul class=" admin-nav-ul" style="list-style: none">
            <li class='admin-nav-element'>Dashboard</li>
            <li class='admin-nav-element'>Car register</li>
            <li class='admin-nav-element'>Rental Overview</li>
            <li class='admin-nav-element'>Car Overview</li>
          </ul>
        </nav>
        <div class=" admin-dropdown">
        <img src="../uploads/profile.png" alt="logo" class='img-circle'>
          <div class="dropdown-content">
            <?php
            if (isset($_SESSION['email'])) {
            ?>
              <a class="dropdown-item" href="process/logout.php">Logout</a>
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
    <main class='admin-main white'>
        <section class='car-collection' >
           <div class=''>
           <h2> 
             Car Overview
            </h2>
            <table>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
                <?php 
                    $i=0;
                    $selectcar="SELECT * FROM car";
                    $carresult=mysqli_query($connect,$selectcar);
                    while($carlist=$carresult->fetch_assoc()){
                ?>

                <tr>
                    <td><?php echo ++$i;?></td>
                    <td><?php echo $carlist['name'];?></td>
                    <td><?php echo $carlist['model'];?></td>
                    <td><a href="../uploads/<?php echo $carlist['photo'];?>" target="_blank"><img src="../uploads/<?php echo $carlist['photo'];?>" alt="car" width="100" height="100"></a></td>
                    <td>
                        <a href="car_view.php?id=<?php echo $carlist['cid'];?>"><button class='button button-green'>View more</button></a>
                        <a href="car_edit.php?id=<?php echo $carlist['cid'];?>"><button class='button button-blue'>Edit</button></a>
                        <a href="http://"><button class='button button-red'>Delete</button></a>
                    </td>
                </tr>
                <?php 
                    }
                    ?>
            </table></div>
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