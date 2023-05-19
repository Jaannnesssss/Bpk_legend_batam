<?php 

include_once("db_connection.php");

    if(isset($_GET['id'])){
        $id_request = $_GET['id'];
        
        $query = "UPDATE request_barang SET status_request = 'Cancelled' where id_request = '$id_request'";
        $result = mysqli_query($mysqli,$query);

        if ($result) 
        {
            header('location:request.php');
        } 
        else 
        {
            echo "Check Your Query";
        }
    }
?>