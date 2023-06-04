<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
?>
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