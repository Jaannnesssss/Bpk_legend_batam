<?php 

include_once("db_connection.php");

    if(isset($_GET['id'])){
        $id_pesanan = $_GET['id'];
        
        $query = "UPDATE pesanan SET status = 'Cancelled' WHERE id_pesanan = '$id_pesanan'";
        $result = mysqli_query($mysqli,$query);

        if ($result) 
        {
            $firstidtransaksi = "T0001";

            $selecttransaksi = "SELECT * FROM transaksi ORDER BY id_transaksi desc LIMIT 1";
            $resultselecttransaksi = $mysqli -> query($selecttransaksi);

            if(mysqli_num_rows($resultselecttransaksi) === 0){
                $insertfirsttransaksi = "INSERT INTO transaksi VALUES ('$firsttransaksiid','$id_pesanan',NULL,'Cancelled')";
                $resultinsertfirsttransaksi = mysqli_query($mysqli,$insertfirsttransaksi);
            }
            else{
                $transaksi_id = $resultselecttransaksi -> fetch_array();
                $transaksi_id = (int)substr ($transaksi_id['id_transaksi'],1,);
                $transaksi_id++;
                $firsttransaksiid = 'T'. str_pad($transaksi_id,4,"0",STR_PAD_LEFT);

                $inserttransaksi = "INSERT INTO transaksi VALUES ('$firsttransaksiid','$id_pesanan',NULL,'Cancelled')";
                $resultinserttransaksi = mysqli_query($mysqli,$inserttransaksi);
            }

            header('location:entriorder.php');
        } 
        else 
        {
            echo "Check Your Query";
        }
    }
?>