<?php
    include_once("db_connection.php");
    if (isset($_POST['update'])) 
    {
        $departement_id = $_POST['depart_id'];
        $departement_name = $_POST['depart_name'];
        $query = "UPDATE departement SET departement_name ='$departement_name' WHERE departement_id ='$departement_id'";
        $result = mysqli_query($mysqli, $query);

        if ($result) 
        {
            header('location:departement_list.php');
        } 
        else 
        {
            echo "Check Your Query";
        }
    }
?>