<?php 

    include_once("db_connection.php");

    if(isset($_GET['nama'])){
        
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
            <a href="index.php">Home</a> > Entri Barang
        </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3" style="background-color:white; border-radius: 0px 0px 10px 10px; padding-right:30px; padding-left:30px; padding-bottom:15px";>
                <div class="col-sm-3 offset-sm-9">
                <a href="request.php"><button type="button" class="btn btn-success" style="margin-top: 10px; margin-bottom : 10px; margin-right : 10ox">Request Barang</button></a>
                </div>
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light text-center">
                        </thead>
                        <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">ID Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Stok Barang</th>
                            <th scope="col">Satuan</th>
                        </tr>
                        </thead>
                            <?php
                                $selectbarang = $mysqli->query("SELECT * FROM barang");
                                if($selectbarang ->num_rows> 0){
                                    while($row = $selectbarang -> fetch_assoc()) { 
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?php echo $row['id_barang']; ?></th>
                                <td><?php echo $row['nama_barang']; ?></td>
                                <td><?php echo $row['stok']; ?></td>
                                <td><?php echo $row['satuan']; ?></td>
                                </tr>
                            </tbody>
                            <?php } }?>
                    </table>
                </div>
        </div>
    </div>
</body>
</html>