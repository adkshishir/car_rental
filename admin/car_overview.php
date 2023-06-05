<?php
include '../include/admin_header.php';
require '../process/db.php';
require '../process/admin_secure.php';
?>
<title>Car Overview</title>

</head>

<body>
  <div class='admin-body'>

    <!-- <========== ADMIN ASIDE AND HEADER STARTS ===========> -->

    <?php
    include '../include/admin_aside.php';
    ?>

    <!-- <========== ADMIN ASIDE AND HEADER ENDS ===========> -->

    <main class='admin-main white'>
      <section class='car-collection'>
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
            $i = 0;
            $selectcar = "SELECT * FROM car";
            $carresult = mysqli_query($connect, $selectcar);
            while ($carlist = $carresult->fetch_assoc()) {
            ?>

              <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $carlist['name']; ?></td>
                <td><?php echo $carlist['model']; ?></td>
                <td><a href="../uploads/<?php echo $carlist['photo']; ?>" target="_blank"><img src="../uploads/<?php echo $carlist['photo']; ?>" alt="car" width="100" height="100"></a></td>
                <td>
                  <a href="car_view.php?id=<?php echo $carlist['cid']; ?>"><button class='button button-green'>View more</button></a>
                  <a href="car_edit.php?id=<?php echo $carlist['cid']; ?>"><button class='button button-blue'>Edit</button></a>
                  <a href="http://"><button class='button button-red'>Delete</button></a>
                </td>
              </tr>
            <?php
            }
            ?>
          </table>
        </div>
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