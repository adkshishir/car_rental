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
      <main class="admin-main white">
        <h2>Rented cars</h2>
        <table>
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Car</th>
              <th>Rental Start Date</th>
              <th>Rental End Date</th>
              <th>total Amount</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>3</td>
              <td>forari</td>
              <td>2023/02/02</td>
              <td>2023/02/06</td>
              <td>2000</td>
              <td>well</td>
            </tr>
            <tr>
              <td>6</td>
              <td>forari</td>
              <td>2023/02/02</td>
              <td>2023/02/06</td>
              <td>2000</td>
              <td>bad</td>
            </tr>
            <tr>
              <td>4</td>
              <td>forari</td>
              <td>2023/02/02</td>
              <td>2023/02/06</td>
              <td>2000</td>
              <td>well</td>
            </tr>
          </thead>
        </table>
        <h2>cars Available in stores</h2>
        <table>
          <thead>
            <tr>
              <th>Car ID</th>
              <th>Name</th>
              <th>Photo</th>
              <th>model</th>
              <th>color</th>
              <th>price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>some</td>
              <td>photo url</td>
              <td>models</td>
              <td>color of</td>
              <td>price</td>
              <td>some</td>
            </tr>
            <tr>
              <td>some</td>
              <td>photo url</td>
              <td>models</td>
              <td>color of</td>
              <td>price</td>
              <td>some</td>
            </tr>
            <tr>
              <td>some</td>
              <td>photo url</td>
              <td>models</td>
              <td>color of</td>
              <td>price</td>
              <td>some</td>
            </tr>
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
