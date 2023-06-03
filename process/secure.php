<?php 
    session_start();
    if(isset($_SESSION['email']) && ($_SESSION['role']=='a')){

    }
    else{
        ?>
        <script>location.replace("index.php");</script>
        <?php
    }
?>