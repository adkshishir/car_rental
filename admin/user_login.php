<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login page</title>
    <link rel="stylesheet" href="../asserts/css/style.css"/>
</head>

<body>
    <header>
        <!-- <h2>Enter your details</h2> -->
    </header>
    <main>
        <section class='form-section'>
       <div>
       <h2>Admin login</h2>
            <form action="#" method="post" onsubmit='return validationForm_login()' >
                <?php
                if (isset($_POST['submit'])) {
                    $usrname = $_POST['username'];
                    $pass = $_POST['password'];
                }
                ?>
                <div class="email">
                    <label for="email">Enter your username:
                    </label><br/>
                    <input type="text" name="username" id="email">
                    <div id='usernameError' class='error'></div>

                </div>
                <div class="pass">
                    <label for="password">Enter your password:</label><br/>
                    <input type="password" name="password" id="password">
                    <div id='passwordError' class='error'></div>

                </div>
            </form>
       </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src='../asserts/js/validation_login.js'>

    </script>
</body>
