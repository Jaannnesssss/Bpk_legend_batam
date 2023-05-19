<?php 

include_once("db_connection.php");

    if(isset($_GET['delete'])){
        $id_meja = $_GET['delete'];
        
        $query = "UPDATE meja SET status_meja = NULL , nama_booker = NULL WHERE id_meja = '$id_meja'";
        $result = mysqli_query($mysqli,$query);

        if ($result) 
        {
            header('location:entrimeja.php');
        } 
        else 
        {
            echo "Check Your Query";
        }
    }
?>