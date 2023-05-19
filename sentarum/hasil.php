<?php
    include_once("koneksi.php");
        $NIS = $_POST['NIS'];
        $namasiswa = $_POST['nama_siswa'];
        $UTS = $_POST['UTS'];
        $UAS = $_POST['UAS'];
        $ratarata = ($UAS + $UTS)/2;

   $query = mysqli_query($mysqli,"insert into nilai(NIS,nama_siswa,UTS,UAS.ratarata) values('$NIS','$namasiswa','$UTS','$UAS'.'$ratarata')");

    if($query)
        {
            echo "Data Sudah Tersimpan";
        }
    else
        {
            echo "Data Sudah Ada";
        }
?>
