<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login page</title>
</head>

<body>
    <header>
        <h2>Enter your details</h2>
    </header>
    <main>
        <section>
            <form action="#" method="post">
                <?php
                if (isset($_POST['submit'])) {
                    $usrname = $_POST['username'];
                    $pass = $_POST['password'];
                }
                ?>
                <div class="email">
                    <label for="email">Enter your username:
                    </label>
                    <input type="text" name="username" id="email">
                </div>
                <div class="pass">
                    <label for="password">Enter your password:</label>
                    <input type="password" name="password" id="password">
                </div>
            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>