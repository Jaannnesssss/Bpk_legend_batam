<?php

    include_once("db_connection.php");

    if(isset($_GET['delete'])) 
    {
        $departement_id = $_GET['delete'];
        $query ="DELETE FROM departement WHERE departement_id='$departement_id'";
        $result=mysqli_query($mysqli,$query);
        
        if($result)
        {
            header("Location: departement_list.php"); 
        }
        else
        {
            echo "salah xixixixix";
        }
    }
?>
