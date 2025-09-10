<?php 
    session_start();
    unset($_SESSION['']);
    echo '<script>window.location.href="./Login.php"</script>';
?>