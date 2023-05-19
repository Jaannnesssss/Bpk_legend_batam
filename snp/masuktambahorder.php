<?php

 include_once('db_connection.php');

    session_start();

    if(!isset($_SESSION['login']))
    {
        header("Location: index.php");
        exit;
    }

    $message= $_SESSION['jabatan'];
    
    if($_SESSION['jabatan'] === "waiter"){
        header("Location: tambahorder.php");
    }
    else{
        echo "<script type='text/javascript'>alert('$message tidak dapat mengakses ini'); window.location = 'entriorder.php';</script>";

    }

?>