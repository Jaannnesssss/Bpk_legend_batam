<?php

$A = $_POST['InputKT'];
$B = $_POST['InputNP'];
$C = $_POST['PilihMaskapai'];

$D; 
$E;

if($C === "GR"){
    $D = "Garuda Air";
    $E = 100000;
}
else if($C === "LA"){
    $D = "Lion Air";
    $E = 800000;
}
else{
    $D = "Batik Air";
    $E = 700000;
}

echo "<table>";
echo "<tr>";
echo "<td>Kode Tiket : $A</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nama Penumpang : $B</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Klik Maskapai : $C</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nama Maskapai : $D</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Harga Tiket : $E</td>";
echo "</tr>";
echo "</table>";
?>