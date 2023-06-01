<?php 
        include_once("connection_db.php");
            
        if(isset($_GET['id'])) 
        {
            $id_menu = $_GET['id'];
            $result = $mysqli->query("DELETE FROM menu WHERE menu_id='$id_menu'");
        
            if($result)
            {
                echo "<script type='text/javascript'>window.location = 'menu_config.php';</script>";
            }

        }
?>