<?php 
require 'db.php';
if(isset($_GET['id'])){
    $cid=$_GET['id'];
    // $selectorder="SELECT uid FROM orders WHERE cid = $cid";
    // $orderresult=mysqli_query($connect,$selectorder);
    // $orderlist=$orderresult->fetch_assoc();
    // $uid=$orderlist['uid'];

    $delete= "DELETE FROM orders WHERE cid = $cid";
    $deleteresult=mysqli_query($connect,$delete);
    if($deleteresult){
        $update="UPDATE car SET status='u' WHERE cid = $cid";
        $updateresult=mysqli_query($connect,$update);
        if($updateresult){
            ?>
                <script>history.back();</script>
            <?php
        }
    }
}
?>