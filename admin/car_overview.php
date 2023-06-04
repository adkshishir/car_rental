<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
?>
    <title>Car Overview</title>
    
</head>
<body>
<header class="main-header">
      <center>
        <h1 class="title">Admin Dashboard</h1>

        <nav class="nav nav-bar">
          <ul class="nav nav-ul nav-sticky">
            <li class="nav-element">Dashboard</li>
            <li class="nav-element">Car register</li>
          </ul>
        </nav>
      </center>
    </header>
    <main>
        <section>
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
                <tr>
                    <td>1</td>
                    <td>BMW</td>
                    <td>lsjdfw23</td>
                    <td><a href="../uploads/" target="_blank"><img src="../uploads/" alt="car"></a></td>
                    <td>
                        <a href="car_view.php?id=1"><button class='button button-green'>View more</button></a>
                        <a href="car_edit.php?id=1"><button class='button button-blue'>Edit</button></a>
                        <a href="http://"><button class='button button-red'>Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>BMW</td>
                    <td>lsjdfw23</td>
                    <td><a href="../uploads/" target="_blank"><img src="../uploads/" alt="car"></a></td>
                    <td>
                        <a href="http://"><button class='button button-green '>View more</button></a>
                        <a href="http://"><button class='button button-blue'>Edit</button></a>
                        <a href="http://"><button class='button button-red'>Delete</button></a>
                    </td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>