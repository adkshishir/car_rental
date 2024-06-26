<!-- Car ko bara ma edit garni page  -->
<?php
include '../include/admin_header.php';
require '../process/db.php';
require '../process/admin_secure.php';
if (isset($_GET['id'])) {
    $cid = $_GET['id'];
    $selectcar = "SELECT * FROM car WHERE cid='$cid'";
    $carresult = mysqli_query($connect, $selectcar);
    $cararr = $carresult->fetch_assoc();
?>

    <title>Car Edit</title>
    </head>

    <body>
        <div class='admin-body'>

            <!-- <========== ADMIN ASIDE AND HEADER STARTS ===========> -->

            <?php
            include '../include/admin_aside.php';
            ?>

            <!-- <========== ADMIN ASIDE AND HEADER ENDS ===========> -->

            <main class='admin-main white'>
                <section>
                    <div>
                        <center>
                            <h2>Enter the details of the car:</h2>
                        </center>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <?php
                            if (isset($_POST['submit'])) {
                                $name = addslashes($_POST['name']);
                                $filename = addslashes($_FILES["photo"]['name']);
                                $size = addslashes($_FILES['photo']['size']);
                                $model = addslashes($_POST['model']);
                                $color = addslashes($_POST['color']);
                                $price = addslashes($_POST['price']);
                                $desc = addslashes($_POST['description']);

                                $filename = strtolower($filename);
                                $filename = str_replace(" ", "", $filename);
                                $filename = explode(".", $filename);    // after using explode $filename will act as array and element will be separated after . is found
                                $n = count($filename);
                                $n--;
                                if (!empty($name) && !(empty($model)) && !(empty($color)) && !(empty($price)) && !(empty($desc))) {
                                    if (!empty($_FILES["photo"]['name'])) {
                                        if (!(($filename[$n] == "jpg") || ($filename[$n] == "png") || ($filename[$n] == "jpeg"))) {
                                            echo "* File must be of type JPEG OR JPG OR PNG.";
                                        } else {
                                            if ($size <= 20000) {
                                                $filemsg = "* File size must be less than 2MB.";
                                            } else {
                                                $uploadfile = $filename[0] . "_" . time() . "." . $filename[$n];
                                                if (move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/' . $uploadfile)) {
                                                    //sql query goes here.
                                                    unlink("../uploads/" . $cararr['photo']);
                                                    $update = "UPDATE car SET name='$name',photo='$uploadfile',model='$model',color='$color',price='$price',description='$desc' WHERE cid=$cid";
                                                }
                                            }
                                        }
                                    } else {
                                        $update = "UPDATE car SET name='$name',model='$model',color='$color',price='$price',description='$desc' WHERE cid=$cid";
                                    }
                                    $carresult = mysqli_query($connect, $update);
                                    if ($carresult) {
                            ?>
                                        <script>
                                            location.replace("car_overview.php");
                                        </script>
                            <?php
                                    }
                                }
                            }
                            ?>
                            <div class='nav'>
                                <div>
                                    <div class="name">
                                        <label for="name">Car name:</label><br />
                                        <input type="text" name="name" value="<?php echo $cararr['name']; ?>" id="name"><br />
                                    </div>
                                    <div class="photo">
                                        <div>
                                            <img src="../uploads/<?php echo $cararr['photo']; ?>" alt="car_image" class='img'>
                                        </div>
                                        <label for="photo">Edit</label><br />
                                        <input type="file" name="photo" id="photo"><br />
                                    </div>
                                </div>
                                <div>

                                    <div class="model">
                                        <label for="model">Car model:</label><br />
                                        <input type="text" name="model" value="<?php echo $cararr['model']; ?>" id="model"><br />
                                    </div>
                                    <div class="color">
                                        <label for="color">Car Color:</label><br />
                                        <input type="text" name="color" value="<?php echo $cararr['color']; ?>" id="color"><br />
                                    </div>

                                    <div class="price">
                                        <label for="price">Price per day($):</label><br />
                                        <input type="number" step="0.01" name="price" value="<?php echo $cararr['price']; ?>" id="price"><br />
                                    </div>
                                    <div class="desc">
                                        <label for="description">Enter details:</label><br />
                                        <textarea name="description" id="description" cols="30" rows="10"><?php echo $cararr['description']; ?></textarea><br />
                                    </div>
                                    <div class="submit">
                                        <button type="submit" name="submit" class='button button-blue'>Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </main>
        </div>
        <!-- <======== FOOTER ========> -->
        <?php
        include '../include/admin_footer.php';
        ?>

    </body>
<?php
}
?>

</html>