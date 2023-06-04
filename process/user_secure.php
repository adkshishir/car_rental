<?php 
    session_start();
    if(isset($_SESSION['email'])){

    }
    else{
        ?>
        <script>location.replace("/car_rental/user_login.php?msg=You must have to login first.");</script>
        <?php
    }
?>