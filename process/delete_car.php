<?php 
require 'db.php';
if(isset($_GET['id'])){
    $cid=$_GET['id'];
    $selectcar="SELECT * FROM car WHERE cid = $cid";
    $carresult=mysqli_query($connect,$selectcar);
    $cararr=$carresult->fetch_assoc();

    if($cararr['status']=='b'){
        ?>
        <script>location.replace("../admin/car_overview.php?msg=The car is currently book.");</script>
        <?php
    }else{
        $delete="DELETE FROM car WHERE cid = $cid";
        $deleteresult=mysqli_query($connect,$delete);
        if($deleteresult){
            unlink('../uploads/'.$cararr['photo']);
            ?>
                <script>location.replace("../admin/car_overview.php?msg=Deleted successfully");</script>
            <?php 
        }
    }
}
?>