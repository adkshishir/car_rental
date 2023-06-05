<!-- User ko bara ma herni wala page  -->
<?php
include '../include/admin_header.php';
require '../process/db.php';
require '../process/admin_secure.php';
if (isset($_GET['id'])) {
  $cid = $_GET['id'];
  $selectorder = "SELECT * FROM orders WHERE cid='$cid'";
  $orderresult = mysqli_query($connect, $selectorder);
  $orderarr = $orderresult->fetch_assoc();

  $uid = $orderarr['uid'];
  $selectusr = "SELECT * FROM users WHERE uid= $uid";
  $selectrslt = mysqli_query($connect, $selectusr);
  $usrarr = $selectrslt->fetch_assoc();

  $selectcar = "SELECT * FROM car WHERE cid = $cid";
  $carresult = mysqli_query($connect, $selectcar);
  $carlist = $carresult->fetch_assoc();
  $time = explode(" ", $orderarr['date']);
  $date = explode("-", $time[0]);
?>
  <title>Rental view</title>
  <link rel="stylesheet" href="../asserts/css/style.css" </head>

  <body>
    <div class='admin-body'>

      <!-- <========== ADMIN ASIDE AND HEADER STARTS ===========> -->

      <?php
      include '../include/admin_aside.php';
      ?>

      <!-- <========== ADMIN ASIDE AND HEADER ENDS ===========> -->

      <main class='admin-main white'>
        <h1>Rental details</h1>
        <section>
          <div class='car-collection'>
            <div>
              <div class="">
                <div class="label">Rented by:</div>
                <div class="value"><?php echo $usrarr['name']; ?></div>
              </div>
              <div class="">
                <div class="label">Rented car:</div>
                <div class="value"><?php echo $carlist['name']; ?></div>
              </div>
              <div class="">
                <div class="label">Photo:</div>
                <div class="value">
                  <img src="../uploads/<?php echo $carlist['photo']; ?>" alt="car_image" class='img'>
                </div>
              </div>
            </div>
            <div>
              <div class="">
                <div class="label">Car Model number:</div>
                <div class="value"><?php echo $carlist['model']; ?></div>
              </div>
              <div class="">
                <div class="label">Car Color:</div>
                <div class="value"><?php echo $carlist['color']; ?></div>
              </div>

              <div class="">
                <div class="label">Token:</div>
                <div class="value"><?php echo $orderarr['token']; ?></div>
              </div>
              <div class="">
                <div class="label">Email:</div>
                <div class="value"><?php echo $usrarr['email']; ?></div>
              </div>
              <div class="">
                <div class="label">Address:</div>
                <div class="value"><?php echo $usrarr['address']; ?></div>
              </div>
              <div class="">
                <div class="label">Rented date:</div>
                <div class="value"><?php echo $orderarr['date']; ?></div>
              </div>
              <div class="">
                <div class="label">Length of days:</div>
                <div class="value"><?php echo $orderarr['lob']; ?></div>
              </div>
              <div class="">
                <div class="label">Expired date:</div>
                <div class="value"><?php echo $date[0] . "-" . $date[1] . "-" . ($date[2] + $orderarr['lob']); ?></div>
              </div>
              <div class="">
                <div class="label">Total price:</div>
                <div class="value"><?php echo "$" . ($carlist['price'] * $orderarr['lob']); ?></div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    <!-- <======== FOOTER ========> -->
    <?php
    include '../include/admin_footer.php';
    ?>

  <?php
}
  ?>
  </body>

  </html>