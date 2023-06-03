<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    // require '../process/secure.php';
?>
    <title>Car Register</title>
</head>

<body>
    <header>
        <!-- <h2>Enter the details of the car:</h2> -->
    </header>
    <main>
        <section class='form-section'>
       <div>
       <h2>Enter the details of the car:</h2>
            <form action="#" method="post" enctype="multipart/form-data" onsubmit='return validationForm_adminAdd()'>
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
                    <label for="name">Enter the Car name:</label><br/>
                    <input type="text" name="name" id="name"><br />
                    <div id='nameError' class='error'></div>
                </div>
                <div class="photo">
                    <label for="photo">Upload photo here:</label><br />
                    <input type="file" name="photo" id="photo">
                    <div id='photoError' class='error'></div>

                </div>
                <div class="model">
                    <label for="model">Enter the model:</label><br/>
                    <input type="text" name="model" id="model"><br />
                    <div id='modelError' class='error'></div>

                </div>
                <div class="color">
                    <label for="color">Enter the color:</label><br />
                    <input type="text" name="color" id="color">
                    <div id='colorError' class='error'></div>

                </div>
                <div class="price">
                    <label for="price">Enter the price per day($):</label><br />
                    <input type="number" step="0.01" name="price" id="price">
                    <div id='priceError' class='error'></div>

                </div>
                <div class="desc">
                    <label for="description">Enter details:</label><br />
                    <input type="text" name="description" id="description">
                    <div id='descError' class='error'></div>

                </div>
                <div class="submit">
                    <button type="submit" name="submit" class='button'>Submit</button>
                </div>
            </form>
       </div>
        </section>
    </main>
    <script src='../asserts/js/validation_adminAdd.js'>

    </script>
</body>

</html>