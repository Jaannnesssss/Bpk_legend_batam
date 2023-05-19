<?php 
include_once("db_connection.php");

session_start();

$selectpesanan = "SELECT * FROM pesanan ORDER BY id_pesanan desc LIMIT 1";
$resultselectpesanan = $mysqli->query($selectpesanan);

$selectmeja = "SELECT * FROM meja WHERE status_meja = 'Booked'";
$resultselectmeja = mysqli_query($mysqli,$selectmeja);

$selectmeja2 = "SELECT * FROM meja WHERE status_meja = 'Booked'";
$resultselectmeja2 = mysqli_query($mysqli,$selectmeja2);

$selectmenu = "SELECT * FROM menu";
$resultselectmenu = mysqli_query($mysqli,$selectmenu);


if(isset($_POST['btnorder'])){
    $firstpesananid = "O0001";
    $idmeja = $_POST['idmejaoption'];
    $namabooker = $_POST['namabookeroption'];
    $idmenu = $_POST['menuoption'];
    $jumlahpesanan = (int)$_POST['jumlahmenu'];
    $iduser = $_SESSION['iduser'];

    if(mysqli_num_rows($resultselectpesanan) === 0)
    {
        $insertpesananfirst = "INSERT INTO pesanan VALUES ('$firstpesananid','$idmenu','$idmeja','$jumlahpesanan','$iduser',NULL,'$namabooker' )";
        $resultinsertpesananfirst = mysqli_query($mysqli,$insertpesananfirst);

        if($resultinsertpesananfirst)
        {
            echo "<script type='text/javascript'>alert('Order Di Tambah'); window.location = 'entriorder.php';</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('TETOTTTTTTTT'); window.location = 'entriorder.php';</script>";
        }   
    }
    else
    {   
        $pesanan_id = $resultselectpesanan -> fetch_assoc();
        $pesanan_id = (int)substr ($pesanan_id['id_pesanan'], 1,);
        $pesanan_id++;
        $firstpesananid = 'O' . str_pad($pesanan_id, 4, "0", STR_PAD_LEFT);

        
        $insertpesanan = "INSERT INTO pesanan VALUES ('$firstpesananid','$idmenu','$idmeja','$jumlahpesanan','$iduser',NULL,'$namabooker')";
        $resultinsertpesanan = mysqli_query($mysqli,$insertpesanan);

        if($resultinsertpesanan){
            echo "<script type='text/javascript'>alert('Order Di Tambah'); window.location = 'entriorder.php';</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('$firstpesananid$idmenu$idmeja$jumlahpesanan$iduser NULL $namabooker'); window.location = 'entriorder.php';</script>";
        }   
    }

}
?>

<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                background-color: seashell;
            }
            .navbar-brand {
            font-family: "Brush Script MT", cursive;
            color:pink;
            }
            .linknav{
                padding-left: 15px;
                padding-top: 15px;
                font-family: "Times New Roman", Times, serif;
            }
            form{
                background-color: white;
            }
        </style>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
        <span class="navbar-brand mb-0 h1">La Forte</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
    </nav>
        <div class=linknav>
            <a href="index.php">Home</a> > <a href="entriorder.php">Entri Order</a> > Tambah Order 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2" style="background-color:white; border-radius: 0px 0px 10px 10px; padding-right:30px; padding-left:30px; padding-bottom:15px";>
                <form action="" method="POST">
                    <div class = "row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>ID Meja</b></label>
                                <select class="form-control" name="idmejaoption">
                                <?php while($row = mysqli_fetch_assoc($resultselectmeja)):;?>
                                    <option value="<?php echo $row['id_meja'];?>"><?php echo $row['id_meja'];?></option>
                                <?php endwhile;?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Nama Booker</b></label>
                                <select class="form-control" name="namabookeroption">
                                <?php while($rowbooker = mysqli_fetch_assoc($resultselectmeja2)):;?>
                                    <option value="<?php echo $rowbooker['nama_booker'];?>"><?php echo $rowbooker['nama_booker'];?></option>
                                <?php endwhile;?>
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Menu</b></label>
                            <select class="form-control" name="menuoption">
                                <?php while($row = mysqli_fetch_assoc($resultselectmenu)):;?>
                                    <option value="<?php echo $row['id_menu'];?>"><?php echo $row['nama_menu'];?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Jumlah Menu</b></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Menu" name="jumlahmenu" required>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-md btn-light btn-primary btn-block" style="margin-top : 15px;" name="btnorder">Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>