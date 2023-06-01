<?php 
        include_once("connection_db.php");
            
        if(isset($_GET['id'])) 
        {
            $id_cimage = $_GET['id'];
            $status_cimage = "0";
            $result = $mysqli->query("UPDATE caraousel_image SET status='$status_cimage' WHERE caraousel_id='$id_cimage'");
        
            if($result)
            {
                echo "<script type='text/javascript'>window.location = 'carousel_image.php';</script>";
            }

        }
?>