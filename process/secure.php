<?php 
    session_start();
    if(isset($_SESSION['email']) && ($_SESSION['role']=='a')){

    }
    else{
        ?>
        <script>location.replace("/car_rental/index.php");</script>
        <?php
    }
?>