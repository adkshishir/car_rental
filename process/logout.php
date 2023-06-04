<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['id']);
unset($_SESSION['role']);
?>
<script>
    location.replace("user_login.php?msg=Logout successfully");
</script>