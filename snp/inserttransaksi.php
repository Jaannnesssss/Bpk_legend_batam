<?php

 include_once('db_connection.php');

    session_start();

    $message= $_SESSION['jabatan'];
    
    if($_SESSION['jabatan'] === "kasir"){
    }
    else{
        echo "<script type='text/javascript'>alert('$message tidak dapat mengakses ini'); window.location = 'entriorder.php';</script>";
    }

    $id_pesanan = $_GET['id']; 
    $firsttransaksiid = "T0001";
    $nama_menu = $_GET['nama_menu'];
    $jumlah_menu = $_GET['jumlah'];

    $selectpesanan_meja = "SELECT harga FROM menu WHERE nama_menu = '$nama_menu'";
    $resultselectpesanan_meja = $mysqli -> query($selectpesanan_meja);
    $rowpesanan_meja = $resultselectpesanan_meja -> fetch_array();
    
    $total = $jumlah_menu * $rowpesanan_meja['harga'];
    
    $selecttransaksi = "SELECT * FROM transaksi ORDER BY id_transaksi desc LIMIT 1";
    $resultselecttransaksi = $mysqli -> query($selecttransaksi);
    if(isset($_GET['id'])){
        if(isset($_POST['btntransaksi'])){          

            if(mysqli_num_rows($resultselecttransaksi) === 0)
            {
                $insertfirsttransaksi = "INSERT INTO transaksi VALUES ('$firsttransaksiid','$id_pesanan','$total','Lunas')";
                $resultinsertfirsttransaksi = mysqli_query($mysqli,$insertfirsttransaksi);

                if($resultinsertfirsttransaksi){
                    $updatestatuspesanan = "UPDATE pesanan SET status = 'Done' WHERE id_pesanan = '$id_pesanan'";
                    $resultupdatestatuspesanan = mysqli_query($mysqli,$updatestatuspesanan);
                    echo "<script type='text/javascript'>alert('Transaksi Berhasil!!!'); window.location = 'entriorder.php';</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'entriorder.php';</script>";
                }
            }
            else{
                $transaksi_id = $resultselecttransaksi -> fetch_array();
                $transaksi_id = (int)substr ($transaksi_id['id_transaksi'],1,);
                $transaksi_id++;
                $firsttransaksiid = 'T'. str_pad($transaksi_id,4,"0",STR_PAD_LEFT);

                $inserttransaksi = "INSERT INTO transaksi VALUES ('$firsttransaksiid','$id_pesanan','$total','Lunas')";
                $resultinserttransaksi = mysqli_query($mysqli,$inserttransaksi);

                if($resultinserttransaksi){
                    $updatestatuspesanan = "UPDATE pesanan SET status = 'Done' WHERE id_pesanan = '$id_pesanan'";
                    $resultupdatestatuspesanan = mysqli_query($mysqli,$updatestatuspesanan);
                    echo "<script type='text/javascript'>alert('Transaksi Berhasil!!!'); window.location = 'entriorder.php';</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'entriorder.php';</script>";
                }
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
            <a href="index.php">Home</a> > <a href="entriorder.php">Entri Order</a> > Bayar 
    </div>
    <div class=container>
        <form action="" method="POST">
            <div class="form-group">
                <div class="col">
                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>ID Pesanan</b></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $_GET['id'];?>" name="jumlahmenu" readonly>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Total</b></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $total;?>" name="jumlahmenu" readonly>
                </div>
            </div>
                    <button type="submit" class="btn btn-md btn-light btn-primary btn-block" style="margin-top : 15px;" name="btntransaksi">Transaksi</button>
        </form>
    </div>   
</body>
</html>