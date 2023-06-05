<?php
if(isset($_GET['id'])){
    $cid=$_GET['id'];
    $id = $_GET['id'];
    $selectcar="SELECT * FROM car WHERE cid=$id";
    $carresult=mysqli_query($connect,$selectcar);
    $cararr=$carresult->fetch_assoc();
    if($cararr['status']=='u'){

    }
    else{
        echo "Already book that car.";
        ?>
            <script>location.replace("index.php");</script>
        <?php 
    }
}
?>