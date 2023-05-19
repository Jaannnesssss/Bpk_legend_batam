<?php
    include_once("db_connection.php");
    session_start();
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
            <a href="index.php">Home</a> > Entri Order 
        </div>
        <div class="container">
            <div class="row" style="margin-top: 15px;">
                <div class="col-sm-2">
                    <div class="card" style="height: 100%;width: 18rem;  box-shadow: 1px 1px 2px 2px">
                    <img class="card-img-top" src="food1.jpg" alt="Card image cap" style="height: 30%;">
                    <div class="card-body">
                        <h5 class="card-title">Soupe à l’oignon</h5>
                        <p class="card-text">This is a traditional French soup made of onions and beef stock, usually served with croutons and melted cheese on top.The soup’s unique flavor comes from the caramelization of the onions, which often have brandy or sherry added during the slow-cooking process.</p>
                    </div>
                    <div class="card-footer text-muted">
                        IDR 54.750
                    </div>
                    </div>
                </div>
                <div class="col-sm-2 offset-sm-2">
                    <div class="card" style=" height: 100% ;width: 18rem; box-shadow: 1px 1px 2px 2px">
                    <img class="card-img-top" src="food2.jpg" alt="Card image cap" style="height: 30%;">
                    <div class="card-body">
                        <h5 class="card-title">Coq au Vin</h5>
                        <p class="card-text">It is a dish of chicken braised (pot roasted) with wine, mushrooms, salt pork or bacon (lardons), mushrooms, onion, often garlic and sometimes brandy. Although the name translates as ‘rooster or cock in wine’ – and braising is ideal for tougher birds – the recipe usually uses chicken or capon.</p>
                    </div>
                    <div class="card-footer text-muted">
                        IDR 70.500
                    </div>
                    </div>
                </div>
                <div class="col-sm-2 offset-sm-2">
                    <div class="card" style="height: 100% ;width: 18rem; box-shadow: 1px 1px 2px 2px">
                    <img class="card-img-top" src="food3.jpg" alt="Card image cap" style="height: 30%;">
                    <div class="card-body">
                        <h5 class="card-title">Ratatouille</h5>
                        <p class="card-text">Hailing from the southeastern French region of Provence. It is a stewed vegetable recipe that can be served as a side dish, meal or stuffing for other dishes, such as crepes and omelettes.</p>
                    </div>
                    <div class="card-footer text-muted">
                        IDR 67.300
                    </div>
                    </div>
                </div>
            </div>
            <br><br><br>
                <div class="row">
                    <div class="col-sm-3 offset-sm-9">
                    <a href="masuktambahorder.php"><button type="button" class="btn btn-success" style="margin-top: 10px; margin-bottom : 10px; margin-right : 10ox">Tambah Order</button></a>
                    </div>
                    <div class="col-12">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light text-center">
                            </thead>
                            <thead class="thead-dark text-center">
                            <tr>
                                <th scope="col">ID Order</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">ID Meja</th>
                                <th scope="col">Nama Booker</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Pengisi Data</th>
                                <th scope="col">Option</th>                             
                            </tr>
                            </thead>
                                <?php
                                    $selectbarang = $mysqli->query("SELECT pesanan.id_pesanan, menu.nama_menu, meja.id_meja, meja.nama_booker, pesanan.jumlah, pengguna.id_user, pengguna.username FROM pesanan,menu,meja,pengguna WHERE pesanan.id_menu = menu.id_menu AND pesanan.id_meja = meja.id_meja AND pesanan.id_user = pengguna.id_user AND pesanan.status IS NULL ");
                                    if($selectbarang ->num_rows> 0){
                                        while($row = $selectbarang -> fetch_assoc()) { 
                                ?>
                                <tbody>
                                    <tr>
                                    <th scope="row"><?php echo $row['id_pesanan']; ?></th>
                                    <td><?php echo $row['nama_menu']; ?></td>
                                    <td><?php echo $row['id_meja']; ?></td>
                                    <td><?php echo $row['nama_booker']; ?></td>
                                    <td><?php echo $row['jumlah']; ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td>                                    
                                        <a href="inserttransaksi.php?id=<?php echo $row['id_pesanan'];?>&nama_menu=<?php echo $row['nama_menu'];?>&jumlah=<?php echo $row['jumlah'];?>"
                                            class="btn btn-info">Bayar</a>
                                        <a href="deletepesanan.php?id=<?php echo $row['id_pesanan']; ?>"
                                            class="btn btn-Danger">Cancel</a>
                                    </td>
                                    </tr>
                                </tbody>
                                <?php } }?>
                        </table>
                    </div>
            </div>
        </div>
    </body>
</html>