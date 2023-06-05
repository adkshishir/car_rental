<?php
require '../process/admin_secure.php';
require '../process/db.php';
include '../include/admin_header.php';
?>
<title>Admin Dashboard</title>
</head>

<body>
  <div class="admin-body">
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
    <main class="admin-main white">
      <h2>Rented cars</h2>
      <table>
        <thead>
          <tr>
            <th>Car ID</th>
            <th>Car</th>
            <th>Rental Start Date</th>
            <th>Lenght of booking</th>
            <th>Rental End Date</th>
            <th>Total Amount</th>

          </tr>
          </thead>
          <?php
          $i = 0;
          $selectorder = "SELECT * FROM orders ORDER BY date ASC";
          $orderresult = mysqli_query($connect, $selectorder);
          while ($orderlist = $orderresult->fetch_assoc()) {
            $cid = $orderlist['cid'];
            $selectcar = "SELECT * FROM car WHERE cid = $cid";
            $carresult = mysqli_query($connect, $selectcar);
            $carlist = $carresult->fetch_assoc();
            $time=explode(" ",$orderlist['date']);
            $date=explode("-",$time[0]);
          ?>
            <tr>
              <td><?php echo $carlist['cid']; ?></td>
              <td><?php echo $carlist['name']; ?></td>
              <td><?php echo $orderlist['date']; ?></td>
              <td><?php echo $orderlist['lob']; ?></td>
              <td><?php echo $date[0]."-".$date[1]."-".($date[2]+$orderlist['lob']);?></td>
              <td><?php echo "$" . ($carlist['price'] * $orderlist['lob']); ?></td>
            </tr>
          <?php
          }
          ?>
      </table>
      <h2>cars Available in stores</h2>
      <table>
        <thead>
          <tr>
            <th>S.N</th>
            <th>Car ID</th>
            <th>Name</th>
            <th>Photo</th>
            <th>model</th>
            <th>color</th>
            <th>price per day</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $i = 0;
          $selectcar = "SELECT * FROM car WHERE status='u'";
          $carresult = mysqli_query($connect, $selectcar);
          while ($carlist = $carresult->fetch_assoc()) {
            
          ?>
          <tr>
            <td><?php echo ++$i;?></td>
            <td><?php echo $carlist['cid'];?></td>
            <td><?php echo $carlist['name'];?></td>
            <td><a href="../uploads/<?php echo $carlist['photo'];?>" target="_blank" rel="noopener noreferrer"><img src="../uploads/<?php echo $carlist['photo'];?>" alt="car_photo" width="80" height="80" srcset=""></a></td>
            <td><?php echo $carlist['model'];?></td>
            <td><?php echo $carlist['color'];?></td>
            <td><?php echo "$".$carlist['price'];?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
    </main>
  </div>
  <footer class="footer admin-footer">
    <div>
      <p style="color: white">&copy;2023 Ezy Rental .All rights reserved.</p>

    </div>
  </footer>
</body>

</html>