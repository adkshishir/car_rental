<?php
    include '../include/admin_header.php';
    // require '../process/db.php';
?>
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../asserts/css/style.css" /> -->

    <title>Car Overview</title>
    
</head>
<body>
<header class='main-header admin-header'>
    <h1 class='title'> Ezy Rental </h1>
    <nav class="nav nav-bar">
        <ul class="nav nav-ul nav-sticky">
          <li class="nav-element">Dashboard</li>
          <li class="nav-element">Car Register</li>
         
        </ul>
      </nav>
    </header>
    <main >
        <section class='form-section' >
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
            </table></div>
        </section>
    </main>
</body>
</html>