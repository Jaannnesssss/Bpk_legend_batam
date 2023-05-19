<?php 

    include_once("db_connection.php");

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
            <a href="index.php">Home</a> > History Transaksi
        </div>
    <div class="container">
        <div class="row">
                <div class="col-sm-3 offset-sm-4">
                <h4> Transaksi Yang Berhasil </h4>
                </div>
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light text-center">
                        </thead>
                        <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">ID Transaksi</th>
                            <th scope="col">ID Pesanan</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Transaksi</th>
                        </tr>
                        </thead>
                            <?php
                                $selecttransaksilunas = $mysqli->query("SELECT * FROM transaksi WHERE status = 'Lunas'");
                                if($selecttransaksilunas ->num_rows> 0){
                                    while($row = $selecttransaksilunas -> fetch_assoc()) { 
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?php echo $row['id_transaksi']; ?></th>
                                <td><?php echo $row['id_pesanan']; ?></td>
                                <td><?php echo $row['total']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                </tr>
                            </tbody>
                            <?php } }?>
                    </table>
                </div>
        </div>
        </br></br></br>
        <div class="row">
                <div class="col-sm-3 offset-sm-4">
                <h5> Pesanan Yang Di Cancel </h5>
                </div>
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light text-center">
                        </thead>
                        <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">ID Transaksi</th>
                            <th scope="col">ID Pesanan</th>
                            <th scope="col">Status Transaksi</th>
                        </tr>
                        </thead>
                            <?php
                                $selecttransaksilunas = $mysqli->query("SELECT * FROM transaksi WHERE status = 'Cancelled'");
                                if($selecttransaksilunas ->num_rows> 0){
                                    while($row = $selecttransaksilunas -> fetch_assoc()) { 
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?php echo $row['id_transaksi']; ?></th>
                                <td><?php echo $row['id_pesanan']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                </tr>
                            </tbody>
                            <?php } }?>
                    </table>
                </div>
        </div>
    </div>
</body>
</html>