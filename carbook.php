<?php
include 'include/header.php';
require 'process/user_secure.php';
require 'process/booking_check.php';
if (isset($_GET['id'])) {

?>

  <title>Car / Book</title>
  </head>

  <body>
    <button onclick='toggleNav()' class='button btn-circle'>Menu</button>

    <!-- <====== NAVBAR =======> -->
    <?php
    include 'include/navbar.php';
    ?>


    <main>

      <section class='car-collection'>
        <div class='car-detail'>
          <h2>Book you car</h2>
          <div class="name">
            <div class="label">Car Name:</div>
            <div class="value"><?php echo $cararr['name']; ?></div>
          </div>
          <div class="photo">
            <div class="label">Car Photo:</div>
            <div class="value"><img src="uploads/<?php echo $cararr['photo']; ?>" alt="car_photo" class='img'></div>
          </div>
        </div>
        <div class='car-detail ' style='max-width:600px;'>
          <div class="model">
            <div class="label">Car model:</div>
            <div class="value"><?php echo $cararr['model']; ?></div>
          </div>
          <div class="color">
            <div class="label">Car Color:</div>
            <div class="value"><?php echo $cararr['color']; ?></div>
          </div>
          <div class="price">
            <div class="label">Car Price(per day): $</div>
            <div class="value"><?php echo $cararr['price']; ?></div>
          </div>
          <div class="description">
            <div class="label " style='max-width:300px;'>Car description:</div>
            <div class="value"><?php echo $cararr['description']; ?></div>
          </div>

          <form action="#" method="post">
            <?php
            if (isset($_POST['submit'])) {
              $lob = $_POST['lob'];
              if (!empty($lob)) {
                $token = rand(10000, 99999);
                $emlarr = explode("@", $_SESSION['email']);
                $token = $emlarr[0] . $token . $_SESSION['id'] . $cararr['model'];
                $token = str_replace(" ", "", $token);
                $uid = $_SESSION['id'];
                $insert = "INSERT INTO orders(uid,cid,lob,token) VALUES('$uid','$id','$lob','$token')";
                $insertresult = mysqli_query($connect, $insert);
                if (($insertresult)) {
                  $update = "UPDATE car SET status='b' where cid=$id";
                  $updateresult = mysqli_query($connect, $update);
            ?>
                  <script>
                    location.replace("billprint.php?id=<?php echo $id; ?>");
                  </script>
            <?php
                }
              }
            }
            ?>
            <div>
              <label for="lob"><span class="error">*</span>Enter length of booking(days):</label>
              <input type="number" name="lob" id="lob">
            </div>
            <div>
              <button type="submit" name="submit" class='button button-blue'>Book</button>
            </div>
          </form>
        </div>
      </section>
    </main>
  <?php
} else {
  echo "First choose a car.";
}
  ?>

  <!-- <====== FOOTER ======> -->
  <?php
  include 'include/footer.php';
  ?>
  <script src='asserts/js/toggleNav.js'> </script>

  </body>

  </html>