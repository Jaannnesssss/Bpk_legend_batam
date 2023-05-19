<?php
    include_once("db_connection.php");

    $departement_id = $_POST['depart_id'];
	$departement_name = $_POST ['depart_name'];

    $stmt = $mysqli->prepare("INSERT INTO departement(departement_id,departement_name) VALUES (?, ?)");
    $stmt->bind_param('ss',$departement_id, $departement_name);
    if($stmt->execute())
    {
        $stmt->close();
        header("Location: departement_list.php"); 
    }
    
    else
    {
        header("location: departement.php");
    }
    
?>