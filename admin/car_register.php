<?php
    include '../include/admin_header.php';
    require '../process/db.php';
    require '../process/admin_secure.php';
?>
    <title>Car Register</title>
</head>

<body>
<div class='admin-body'>
<header class="admin-header white">
        <center>
          <h1 class="title">Admin Dashboard</h1>

          <nav class=" ">
            <ul class="" style="list-style: none">
              <li class='nav-element'>Dashboard</li>
              <li class='nav-element'>Car register</li>
            </ul>
          </nav>
          <div class=" admin-dropdown">
        <button class="button button-green">Profile</button>
        <div class="dropdown-content">
          <?php
          if(isset($_SESSION['email'])){
            ?>
            <a class="dropdown-item" href="process/logout.php">Logout</a>
          <?php
          }else{
          ?>
          <a class="dropdown-item" href="user_login.php">Login</a>
          <a class="dropdown-item" href="user_register.php">Sign Up</a>
          <?php
          }
          ?>
        </div>
      </div>
        </center>
      </header>
    <main class='admin-main white'>
        <section class='car-collection'>
       <div>
       <h2>Enter the details of the car:</h2>
      
            <form action="#" method="post" enctype="multipart/form-data" onsubmit='return validationForm_adminAdd()'>
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
                                $insert="INSERT INTO car(name,photo,model,color,price,description) VALUES('$name','$uploadfile','$model','$color','$price','$desc')";
                                $carresult=mysqli_query($connect,$insert);
                                if($carresult){
                                    ?>
                                        <script>location.replace("index.php");</script>
                                    <?php
                                }
                            }
                        }
                    }
                }
                }
                ?>
                <div class="name">
                    <label for="name"><span class="error">*</span>Enter the Car name:</label><br/>
                    <input type="text" name="name" id="name" placeholder='Car name...'><br />
                    <div id='nameError' class='error'></div>
                </div>
                <div class="photo">
                    <label for="photo"><span class="error">*</span>Upload photo here:</label><br />
                    <input type="file" name="photo" id="photo">
                    <div id='photoError' class='error'></div>

                </div>
                <div class="model">
                    <label for="model"><span class="error">*</span>Enter the model:</label><br/>
                    <input type="text" name="model" id="model" placeholder='car model...'><br />
                    <div id='modelError' class='error'></div>

                </div>
                <div class="color">
                    <label for="color"><span class="error">*</span>Enter the color:</label><br />
                    <input type="text" name="color" id="color" placeholder='Car color...'>
                    <div id='colorError' class='error'></div>

                </div>
                <div class="price">
                    <label for="price"><span class="error">*</span>Enter the price per day($):</label><br />
                    <input type="number" step="0.01" name="price" id="price" placeholder='price/day...'>
                    <div id='priceError' class='error'></div>

                </div>
                <div class="desc">
                    <label for="description"><span class="error">*</span>Enter details:</label><br />
                    <input type="text" name="description" id="description" placeholder='description...'>
                    <div id='descError' class='error'></div>

                </div>
                <div class="submit">
                    <button type="submit" name="submit" class='button button-blue'>Submit</button>
                </div>
            </form>
       </div>
        </section>
    </main>
</div>
<footer class="footer admin-footer">
      <div>
        <p style="color: white">&copy;2023 Ezy Rental .All rights reserved.</p>
     
      </div>
    </footer>
    <script src='../asserts/js/validation_adminAdd.js'>

    </script>
</body>

</html>