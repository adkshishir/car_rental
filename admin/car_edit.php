<!-- Car ko bara ma edit garni page  -->
<?php
    require '../process/db.php';
    // require '../process/secure.php';
    if(isset($_GET['id'])){
        $cid=$_GET['id'];
        $selectcar="SELECT * FROM car WHERE cid='$cid'";
        $cararr=mysqli_query($connect,$selectcar);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Edit</title>
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
                    $desc = $_POST['description'];

                    $filename = strtolower($filename);
                    $filename = str_replace(" ", "", $filename);
                    $filename = explode(".", $filename);    // after using explode $filename will act as array and element will be separated after . is found
                    $n = count($filename);
                    $n--;
                    if(!empty($name)&&!(empty($model))&&!(empty($color))&&!(empty($price))&&!(empty($desc))){
                    if (!(($filename[$n] == "jpg") || ($filename[$n] == "png") || ($filename[$n] == "jpeg"))) {
                        $filemsg = "* File must be of type JPEG OR JPG OR PNG.";
                    } else {
                        if ($size <= 20000) {
                            $filemsg = "* File size must be less than 2MB.";
                        } else {
                            $uploadfile = $filename[0] . "_" . time() . "." . $filename[$n];
                            if (move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/' . $uploadfile)) {
                                //sql query goes here.
                                $insert="INSERT INTO car(name,photo,model,color,price,desc) VALUES('$name','$uploadfile','$model','$color','$price','$desc')";
                                $carresult=mysqli_query($connect,$insert);
                                if($carresult){
                                    ?>
                                        <script>loaction.replace("index.php");</script>
                                    <?php
                                }
                            }
                        }
                    }
                }
                }
                ?>
                <div class="name">
                    <label for="name">Car name:</label>
                    <input type="text" name="name" value="<?php echo $cararr['name'];?>" id="name"><br />
                </div>
                <div class="photo">
                    <div class="img">
                        <img src="../uploads/<?php echo $cararr['photo'];?>" alt="car_image">
                    </div>
                    <label for="photo">Edit</label>
                    <input type="file" name="photo" id="photo"><br />
                </div>
                <div class="model">
                    <label for="model">Car model:</label>
                    <input type="text" name="model" value="<?php echo $cararr['name'];?>" id="model"><br />
                </div>
                <div class="color">
                    <label for="color">Color:</label>
                    <input type="text" name="color" value="<?php echo $cararr['name'];?>" id="color"><br />
                </div>
                <div class="price">
                    <label for="price">Price per day($):</label>
                    <input type="number" step="0.01" name="price" value="<?php echo $cararr['name'];?>" id="price"><br />
                </div>
                <div class="desc">
                    <label for="description">Enter details:</label>
                    <textarea name="description" id="description" cols="30" rows="10"><?php echo $cararr['description'];?></textarea><br />
                </div>
                <div class="submit">
                    <button type="submit" name="submit">Update</button>
                </div>
            </form>
        </section>
    </main>
</body>
<?php
    }
    ?>

</html>