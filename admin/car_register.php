<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Register</title>
</head>

<body>
    <header>
        <h2>Enter the details of the car:</h2>
    </header>
    <main>
        <section>
            <form action="#" method="post" enctype="multipart/form-data">
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $filename = $_FILES["photo"]['name'];
                    $size = $_FILES['photo']['size'];
                    $model = $_POST['model'];
                    $color = $_POST['color'];
                    $price = $_POST['price'];

                    $filename = strtolower($filename);
                    $filename = str_replace(" ", "", $filename);
                    $filename = explode(".", $filename);    // after using explode $filename will act as array and element will be separated after . is found
                    $n = count($filename);
                    $n--;
                    if (!(($filename[$n] == "jpg") || ($filename[$n] == "png") || ($filename[$n] == "jpeg"))) {
                        $filemsg = "* File must be of type JPEG OR JPG OR PNG.";
                    } else {
                        if ($size <= 20000) {
                            $filemsg = "* File size must be less than 2MB.";
                        } else {
                            $uploadfile = $filename[0] . "_" . time() . "." . $filename[$n];
                            if (move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $uploadfile)) {
                                //sql query goes here.
                            }
                        }
                    }
                }
                ?>
                <div class="name">
                    <label for="name">Enter the Car name:</label>
                    <input type="text" name="name" id="name"><br />
                </div>
                <div class="photo">
                    <label for="photo">Upload photo here:</label>
                    <input type="file" name="photo" id="photo"><br />
                </div>
                <div class="model">
                    <label for="model">Enter the model:</label>
                    <input type="text" name="model" id="model"><br />
                </div>
                <div class="color">
                    <label for="color">Enter the color:</label>
                    <input type="text" name="color" id="color"><br />
                </div>
                <div class="price">
                    <label for="price">Enter the price per day($):</label>
                    <input type="number" step="0.01" name="price" id="price"><br />
                </div>
                <div class="submit">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>