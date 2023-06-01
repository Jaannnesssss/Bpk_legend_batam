<?php 
        include_once("connection_db.php");
            
        if(isset($_GET['id'])) 
        {
            $id_cimage = $_GET['id'];
            $result = $mysqli->query("DELETE FROM caraousel_image WHERE caraousel_id='$id_cimage'");
        
            if($result)
            {
                echo "<script type='text/javascript'>window.location = 'carousel_image.php';</script>";
            }

        }
?>