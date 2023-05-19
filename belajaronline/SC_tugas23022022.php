<?php 
$a = $_POST['NIS'];
$b = $_POST['nama'];
$c = $_POST['UTS'];
$d = $_POST['UAS'];

$e = $c + $d;
$f = (float)$e / 2;
$g = "";

if($f >= 85 ){
    $g = "A";
}
else if($f >= 65){
    $g = "B";
}
else{
    $g = "C";
}
?>
<html>
    <head><title>SC Input Data Siswa</title></head>

    <body>
        <center>
        <form action="" method="POST">
            <table border=1>
                <tr>
                    <td> NIS </td>
                    <td><input type="text" name="NIS" value="<?php echo "$a"; ?>"></td>
                </tr>
                <tr>
                    <td> Nama Siswa</td>
                    <td><input type="text" name="nama" value="<?php echo "$b"; ?>"></td>
                </tr>
                <tr>
                    <td> UTS </td>
                    <td><input type="text" name="UTS" value="<?php echo "$c"; ?>"></td>
                </tr>
                <tr>
                    <td> UAS </td>
                    <td><input type="text" name="UAS" value="<?php echo "$d"; ?>"></td>
                </tr>
                <tr>
                    <td> Jumlah </td>
                    <td><input type="text" name="jumlah" value="<?php echo "$e"; ?>"></td>
                </tr>
                <tr>
                    <td> Rata-rata </td>
                    <td><input type="text" name="ratarata" value="<?php echo "$f"; ?>"></td>
                </tr>
                <tr>
                    <td> Keterangan </td>
                    <td><input type="text" name="keterangan" value="<?php echo "$g"; ?>"></td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>
                