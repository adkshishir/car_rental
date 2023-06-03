<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login page</title>
    <link rel="stylesheet" href="asserts/css/style.css"/>
</head>

<body>
    <header>
        
    </header>
    <main>
        <section class="form-section">
       <div>
       <h2>Login Page</h2>
            <form action="#" method="post" onsubmit='return validationForm_login()'>
                <?php
                if (isset($_POST['submit'])) {
                    $usrname = $_POST['username'];
                    $password = $_POST['password'];
                    $password = md5($password);
                    $emailCheck = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                    $emailCount = mysqli_query($connect, $emailCheck);
                    $arr = $emailCount->fetch_assoc();
                    $count = mysqli_num_rows($emailCount);
                    if ($count == 1) {
                        session_start();
                        $_SESSION['email'] = $arr['email'];
                        $_SESSION['id'] = $arr['uid'];
                        $_SESSION['role'] = $arr['status'];

                        if ($arr['status'] == 'a') {
                ?>
                            <script>
                                location.replace("admin/index.php");
                            </script>
                        <?php
                        } else {
                        ?>
                            <script>
                                location.replace("index.php");
                            </script>
                <?php
                        }
                    }
                }
                ?>
                <div class="email">
                    <label for="email">Enter your email:
                    </label><br/>
                    <input type="text" name="username" id="email" placeholder="Email...">
                    <div id='usernameError' class='error'></div>
                    
                </div>
                <div class="pass">
                    <label for="password">Enter your password:</label><br/>
                    <input type="password" name="password" id="password" placeholder="password...">
                    <div id='passwordError' class='error'></div>
                </div>
            </form>
       </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src='asserts/js/validation_login.js'>
    </script>
</body>

</html>