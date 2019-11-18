<?php
    session_start();
    session_destroy();
    unset($_SESSION['nomeusu']);
    header('location:index.php');
?>