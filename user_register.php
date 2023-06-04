<?php
include 'include/header.php';
require 'process/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asserts/css/style.css" />
    <title>Register</title>
</head>

<body>
    <header class='main-header'>
<center>
    <h1 class='title'> Ezy Rental </h1>
</center>
    </header>
    <main>
        <section class='form-section'>
      <div>
      <h2>registration Form</h2>
            <form action="#" method="post" onsubmit='return validationForm_userRegistation()'>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $contact = $_POST['contact'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    $conpass = $_POST['conpass'];

                    #email checking starts here
                    $emailcount = 0;
                    if (!empty($email)) {
                        echo "email check ma aya.";
                        $select = "SELECT email FROM users where email='$email'";
                        $emailcheck = mysqli_query($connect, $select);
                        $emailcount = mysqli_num_rows($emailcheck);
                        if ($emailcount != 0) {
                            echo "* Email already exists in database";
                        }
                    }
                    #email checking ends here

                    if ((!empty($name)) && (!empty($email)) && (!empty($contact)) && (!empty($address)) && (strlen($password) >= 4) && ($password == $conpass) && ($emailcount == 0)) {
                        echo "Insertion ma aya";
                        $password = md5($password);
                        $insert = "INSERT INTO users (name,email,contact,address,password) VALUES('$name','$email','$contact','$address','$password')";
                        $result = mysqli_query($connect, $insert);
                        if ($result) {
                            if (isset($_SESSION['id'])) {
                ?>
                                <script>
                                    history.back();
                                </script>
                            <?php
                            } else {
                            ?>
                                <script>
                                    location.replace("user-login.php");
                                </script>
                <?php
                            }
                        }
                    } else {
                        echo "Doesn't created";
                    }
                }
                ?>
                <div class="name">
                    <label for="name"><span class="error">*</span>Name:</label></br>
                    <input type="text" name="name" id="name" placeholder="Name.."><br />
                    <div id='nameError' class='error'></div>
                </div>
                <div class="email">
                    <label for="email"><span class="error">*</span>Email:</label></br>
                    <input type="email" name="email" id="email" placeholder="Email.."><br />
                    <div id='emailError' class='error'></div>

                </div>
                <div class="address">
                    <label for="address"><span class="error">*</span>Address:</label></br>
                    <input type="text" name="address" id="address" placeholder="Address"><br />
                    <div id='addressError' class='error'></div>

                </div>
                <div class="contact">
                    <label for="contact"><span class="error">*</span>Contact:</label></br>
                    <input type="text" name="contact" id="contact" placeholder="Contact.."><br />
                    <div id='contactError' class='error'></div>

                </div>
                <div class="pass">
                    <label for="password"><span class="error">*</span>Password:</label></br>
                    <input type="password" name="password" id="password" placeholder="Password.."><br />
                    <div id='passwordError' class='error'></div>

                </div>
                <div class="conpass">
                    <label for="conpass"><span class="error">*</span>Confirm Password:</label></br>
                    <input type="password" name="conpass" id="conpass" placeholder="Confirm">
                    <div id='conpassError' class='error'></div>

                </div>
                <div class="submit">
                    <button type="submit" name="submit" class="button button-blue">Submit</button>
                </div>
            </form>
            <div class="link">
                <div>Already have account: <a href="user_register.php">Login</a>
                </div>
            </div>
       </div>
</div>
        </section>
    </main>
    <script src='asserts/js/validation_userRegistration.js'>
    </script>
</body>

</html>