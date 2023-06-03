<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="asserts/css/style.css"/>
    
</head>

<body>
    <header>
        
    </header>
    <main>
        <section class='form-section'>
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
                }
                ?>
                <div class="name">
                    <label for="name">Name:</label></br>
                    <input type="text" name="name" id="name" placeholder="Name.." ><br />
                    <div id='nameError' class='error'></div>
                </div>
                <div class="email">
                    <label for="email" >Email:</label></br>
                    <input type="email" name="email" id="email" placeholder="Email.."><br />
                    <div id='emailError' class='error'></div>

                </div>
                <div class="address">
                    <label for="address" >Address:</label></br>
                    <input type="text" name="address" id="address" placeholder="Address"><br />
                    <div id='addressError' class='error'></div>

                </div>
                <div class="contact">
                    <label for="contact" >Contact:</label></br>
                    <input type="text" name="contact" id="contact" placeholder="Contact.." ><br />
                    <div id='contactError' class='error'></div>

                </div>
                <div class="pass">
                    <label for="password" >Password:</label></br>
                    <input type="password" name="password" id="password" placeholder="Password.."><br />
                    <div id='passwordError' class='error'></div>

                </div>
                <div class="conpass">
                    <label for="conpass">Confirm Password:</label></br>
                    <input type="password" name="conpass" id="conpass" placeholder="Confirm">
                    <div id='conpassError' class='error'></div>

                </div>
                <div class="submit">
                    <button type="submit" name="submit" class="button">Submit</button>
                </div>
            </form>
        </section>
    </main>
    <script src='asserts/js/validation_userRegistration.js'>
        </script>
</body>

</html>