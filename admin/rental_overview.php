<!-- K k rent ma gaya cha bhani wala page  -->
<?php
include '../include/admin_header.php';
require '../process/db.php';
require '../process/admin_secure.php';
?>
<title>View rental details</title>
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
        <table>
          <tr>
            <th>CID</th>
            <th>CName</th>
            <th>UID</th>
            <th>UName</th>
            <th>Token</th>
            <th>Order date</th>
            <th title="Length of book">LOB</th>
            <th>Expired date</th>
            <th>Action</th>
          </tr>
          <?php
          $i = 0;
          $selectorder = "SELECT * FROM orders ORDER BY date ASC";
          $orderresult = mysqli_query($connect, $selectorder);
          while ($orderlist = $orderresult->fetch_assoc()) {
            $cid = $orderlist['cid'];
            $selectcar = "SELECT * FROM car WHERE cid = $cid";
            $carresult = mysqli_query($connect, $selectcar);
            $carlist = $carresult->fetch_assoc();
            $time = explode(" ", $orderlist['date']);
            $date = explode("-", $time[0]);

            $uid = $orderlist['uid'];
            $selectusr = "SELECT * FROM users WHERE uid= $uid";
            $selectrslt = mysqli_query($connect, $selectusr);
            $usrarr = $selectrslt->fetch_assoc();
          ?>
            <tr>
              <td><?php echo $carlist['cid']; ?></td>
              <td><?php echo $carlist['name']; ?></td>
              <td><?php echo $usrarr['uid']; ?></td>
              <td><?php echo $usrarr['name']; ?></td>
              <td><?php echo $orderlist['token']; ?></td>
              <td><?php echo $orderlist['date']; ?></td>
              <td><?php echo $orderlist['lob']; ?></td>
              <td><?php echo $date[0] . "-" . $date[1] . "-" . ($date[2] + $orderlist['lob']); ?></td>
              <td>
                <a href="rental_view.php?id=<?php echo $orderlist['cid']; ?>"><button class='button button-green'>View more</button></a>
                <a href="../process/delete_order.php?id=<?php echo $orderlist['cid']; ?>"><button class='button button-red'>Delete</button></a>
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