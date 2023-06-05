<!-- Car ko description herni wala page  -->
<?php
include 'include/header.php';
if (isset($_GET['id'])) {
  $cid = $_GET['id'];
  $selectcar = "SELECT * FROM car WHERE cid='$cid'";
  $carresult = mysqli_query($connect, $selectcar);
  $cararr = $carresult->fetch_assoc();
?>
  <title>Car / View</title>
  </head>

  <body>
    <button onclick='toggleNav()' class='button btn-circle'>Menu</button>

    <!-- <====== NAVBAR =======> -->
    <?php
    include 'include/navbar.php';
    ?>

    <h2>Details of the cars</h2>
    <main>
      <section class='car-collection'>
        <div class='car-detail'>
          <div class="name">
            <div class="label">Car Name: </div>
            <div class="value"><?php echo $cararr['name']; ?></div>
          </div>

          <div class="name">
            <div class="label">Photo: </div>
            <div class="value"><img src="uploads/<?php echo $cararr['photo']; ?>" alt="car_image" class='img'></div>
          </div>

        </div>
        <div class='car-detail' style='max-width:600px;'>
          <div class="name">
            <div class="label">Car model: </div>
            <div class="value"><?php echo $cararr['model']; ?></div>
          </div>

          <div class="name">
            <div class="label">Car Color: </div>
            <div class="value"><?php echo $cararr['color']; ?></div>
          </div>

          <div class="name">
            <div class="label">Price per day($): </div>
            <div class="value"><?php echo $cararr['price']; ?></div>
          </div>

          <div class="name">
            <div class="label" style='max-width:300px;'>Description: </div>
            <div class="value"><?php echo $cararr['description']; ?></div>
          </div>
        </div>
      </section>
    </main>

    <!-- <====== FOOTER ======> -->
    <?php
    include 'include/footer.php';
    ?>
    <script src='asserts/js/toggleNav.js'> </script>
  <?php
}
  ?>
  </body>

  </html>