<?php 
        include_once("db_connection.php");
            
        if(isset($_GET['edit'])) 
        {
            $id_meja = $_GET['edit'];
            $status_meja = "";
            $namabooker = "";
            $result = $mysqli->query("SELECT * FROM meja WHERE id_meja='$id_meja'");
        
            if($result)
            {
                $row= $result->fetch_array();
                $id_meja = $row['id_meja'];
                $status_meja = $row['status_meja'];
                $namabooker = $row['nama_booker'];
            }

        }

        if(isset($_POST['update'])){
            
        }
?>


<html>
    <head>
        <title>Entri Meja</title>
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
                <a href="index.php">Home</a> > <a href="entrimeja.php">Entri Meja</a> > Edit Entri Meja
            </div>
                <div class=container>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3" style="background-color:white; border-radius: 0px 0px 10px 10px; padding-right:30px; padding-left:30px; padding-bottom:15px";>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>ID Meja</b></label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="Meja_option" type="readonly">                                        
                                            <option value="<?php echo $row['id_meja'];?>"><?php echo $row['id_meja'];?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Status Meja</b></label>
                                            <select class="form-control" name="statusmeja_option" type="readonly">
                                                <option value="<?php echo $row['status_meja'];?>"><?php echo $row['status_meja']; ?></option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Nama Booker</b></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Booker Name" name="booker_name" value="<?php echo $row['nama_booker']; ?>">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-light btn-primary btn-block" style="margin-top : 15px;" name="update">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>