<?php
session_start();

if(!isset($_SESSION['nomeusu'])){
    session_destroy();
    unset($_SESSION['nomeusu']);
    header('location:index.php');
}
?>