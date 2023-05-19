<?php
include("ayam.php");
$Nilai1 = $_POST ['NIL1'];
$Nilai2 = $_POST ['NIL2'];
$Hasilkali = $Nilai1*$Nilai2;
$Hasiltambah = $Nilai1+$Nilai2;
$Hasilkurang = $Nilai1-$Nilai2;

$query = mysqli_query()
("insert into nilai (NIL1,NIL2,KALI,TAMBAH,KURANG) values ('$Nilai1','$Nilai2','$Hasilkali','$Hasiltambah','$Hasilkurang')");

if($query)
    {echo"<script>alert('Data Sudah tersimpan'); Windows.Location='index_kal.php' ;</script>";}
else
    {{echo"<script>alert('Data Sudah Ada'); Windows.Location='kal.php' ;</script>";}}