<!-- K k rent ma gaya cha bhani wala page  -->
<?php
    include '../include/admin_header.php';
?>
    <title>View rental details</title>
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
        <section>
            <table>
                <tr>
                    <th>CID</th>
                    <th>CName</th>
                    <th>UID</th>
                    <th>UName</th>
                    <th title="Length of book">LOB</th>
                    <th>Token</th>
                    <th>Order date</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Audi</td>
                    <td>2</td>
                    <td>Ram</td>
                    <td>2</td>
                    <td>20308430284203480</td>
                    <td>2094332</td>
                    <td>
                        <a href="http://"><button class='button button-green'>View more</button></a>
                        <a href="http://"><button class='button button-red'>Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Audi</td>
                    <td>2</td>
                    <td>Ram</td>
                    <td>2</td>
                    <td>208340284023423</td>
                    <td>2094332</td>
                    <td>
                    <a href="http://"><button class='button button-green'>View more</button></a>
                        <a href="http://"><button class='button button-red'>Delete</button></a>
                    </td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>