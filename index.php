<?php
$sstatus = 0;
include 'include/header.php';
?>
<title>Ezy Rentals</title>
</head>

<body>
  <button onclick='toggleNav()' class='button btn-circle'>Menu</button>

  <!-- <====== NAVBAR =======> -->
  <?php
  include 'include/navbar.php';
  ?>

  <main class="main">
    <?php
    if (!$sstatus) {
      $select = "SELECT * FROM car";
    } else {
      $select = "SELECT * FROM car WHERE name LIKE '%$search%'";
    }
    ?>
    <h1 class="car-collection">some category</h1>
    <section class="car-collection">
      <?php
      $selectresult = mysqli_query($connect, $select);
      while ($cararr = $selectresult->fetch_assoc()) {
      ?>
        <div class="car-detail">
          <h2>Name: <?php echo $cararr['name']; ?></h2>
          <img src="uploads/<?php echo $cararr['photo']; ?>" class='img-small' />
          <h3 class='car-desc'>Model: <?php echo $cararr['model']; ?></h3>

          <h3>Price/day: $<?php echo $cararr['price']; ?></h3>

          <h3> status: <?php echo ($cararr['status'] == 'u') ? "Not book" : "Booked"; ?></h3>

          <div>
            <a href="carview.php?id=<?php echo $cararr['cid']; ?>"><button class="button button-green">view more</button></a>
            <?php
            if ($cararr['status'] == 'u') {
            ?>
              <a href="carbook.php?id=<?php echo $cararr['cid']; ?>"><button class="button button-blue">book Now</button></a>
            <?php
            }
            ?>
          </div>
        </div>
      <?php
      }
      ?>
    </section>
  </main>

  <!-- <====== FOOTER ======> -->
  <?php
  include 'include/footer.php';
  ?>
  <script src='asserts/js/toggleNav.js'> </script>
</body>

</html>