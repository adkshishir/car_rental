<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <header>
        <h2>Enter the details below:</h2>
    </header>
    <main>
        <section>
            <form action="#" method="post">
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
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name"><br />
                </div>
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email"><br />
                </div>
                <div class="address">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address"><br />
                </div>
                <div class="contact">
                    <label for="contact">Contact:</label>
                    <input type="text" name="contact" id="contact"><br />
                </div>
                <div class="pass">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password"><br />
                </div>
                <div class="conpass">
                    <label for="conpass">Confirm Password:</label>
                    <input type="password" name="conpass" id="conpass">
                </div>
                <div class="submit">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>