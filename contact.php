<?php
include 'include/header.php';
?>
<title>About</title>
</head>

<body>
  <button onclick='toggleNav()' class='button btn-circle'>Menu</button>

  <!-- <====== NAVBAR =======> -->
  <?php
  include 'include/navbar.php';
  ?>


  <main class="form-section">
    <section>
      <h1 class="contact-section-title">Get in Touch</h1>
      <p class="contact-section-desc">
        fill out the form to get in touch with us .<br />We will response as
        fast as possible
      </p>
    </section>
    <section>
      <div>
        <form method="POST" action="#">
          <?php
          if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $insertmsg = "INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
            $resultmsg = mysqli_query($connect, $insertmsg);
          }
          ?>
          <h2>Contact Us</h2>
          <div>
            <label for="name">Name:</label><br />
            <input type="text" id="name" name="name" required />
          </div>

          <div>
            <label for="email">Email:</label><br />
            <input type="email" id="email" name="email" required />
          </div>

          <div>
            <label for="message">Message:</label><br />
            <textarea id="message" name="message" required></textarea>
          </div>

          <div>
            <input type="submit" name="submit" value="Submit" />
          </div>
        </form>
      </div>
    </section>
  </main>

  <!-- <====== FOOTER ======> -->
  <?php
  include 'include/footer.php';
  ?>
  <script src='asserts/js/toggleNav.js'> </script>
</body>

</html>