<?php 

    include_once("db_connection.php");

    if(isset($_POST['btnrequest'])){
        $firstrequestid = "R0001";
        $namabarang = $_POST['namabarang'];
        $jumlahbarang = (int)$_POST['jumlahbarang'];
        $satuanbarang = $_POST['satuanoption'];

        $selectrequest = "SELECT * FROM request_barang ORDER BY id_request desc LIMIT 1";
        $resultselectrequest = $mysqli->query($selectrequest);

        if(mysqli_num_rows($resultselectrequest) === 0)
        {
            $insertrequestfirst = "INSERT INTO request_barang (id_request,nama_barang,requested_stok,satuan,status_request) VALUES ('$firstrequestid','$namabarang','$jumlahbarang','$satuanbarang', NULL)";
            $resultinsertrequestfirst = mysqli_query($mysqli,$insertrequestfirst);

            if($resultinsertrequestfirst)
            {
                echo "<script type='text/javascript'>alert('Requested, Silakan Menunggu'); window.location = 'request.php';</script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('TETOTTTTTTTT'); window.location = 'request.php';</script>";
            }   
        }
        else
        {   
            $request_id = $resultselectrequest -> fetch_assoc();
            $request_id = (int)substr ($request_id['id_request'], 1,);
            $request_id++;
            $firstrequestid = 'R' . str_pad($request_id, 4, "0", STR_PAD_LEFT);

            
            $insertrequest = "INSERT INTO request_barang VALUES('$firstrequestid','$namabarang','$jumlahbarang','$satuanbarang', NULL )";
            $resultinsertrequest = mysqli_query($mysqli,$insertrequest);

            if($resultinsertrequest){
                echo "<script type='text/javascript'>alert('Requested, Silakan Menunggu'); window.location = 'request.php';</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'request.php';</script>";
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
            <a href="index.php">Home</a> > <a href="entribarang.php">Entri Barang</a> > Request Barang 
    </div>
    <div class=container>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3" style="background-color:white; border-radius: 0px 0px 10px 10px; padding-right:30px; padding-left:30px; padding-bottom:15px";>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Nama Barang</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang" name="namabarang" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Jumlah Barang</b></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Barang" name="jumlahbarang" required>
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Satuan Barang</b></label>
                                            <select class="form-control" name="satuanoption">
                                                <option value="KG">KG</option>
                                                <option value="Ons">Ons</option>
                                                <option value="Ton">Ton</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-light btn-primary btn-block" style="margin-top : 15px;" name="btnrequest">Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <br><br><br>
                <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light text-center">
                        </thead>
                        <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">ID Request</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Requested Stok</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Option</th>
                        </tr>
                        </thead>
                            <?php
                                $selectbarang = $mysqli->query("SELECT * FROM request_barang WHERE status_request is NULL ");
                                if($selectbarang ->num_rows> 0){
                                    while($row = $selectbarang -> fetch_assoc()) { 
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?php echo $row['id_request']; ?></th>
                                <td><?php echo $row['nama_barang']; ?></td>
                                <td><?php echo $row['requested_stok']; ?></td>
                                <td><?php echo $row['satuan']; ?></td>
                                <td>                                    
                                    <a href="insertentribarang.php?id=<?php echo $row['id_request']?>&nama_barang=<?php echo $row['nama_barang'];?>&stok=<?php echo $row['requested_stok'];?>&satuan=<?php echo $row['satuan'];?>"
                                        class="btn btn-info">Done</a>
                                    <a href="deleterequest.php?id=<?php echo $row['id_request']; ?>"
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