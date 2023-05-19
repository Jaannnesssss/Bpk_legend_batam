<?php

include_once("db_connection.php");
    session_start();

        $message= $_SESSION['jabatan'];
        
        if($_SESSION['jabatan'] === "owner" || $_SESSION['jabatan'] === "kasir" || $_SESSION['jabatan'] === "waiter"){
        }
        else{
            echo "<script type='text/javascript'>alert('$message tidak dapat mengakses ini'); window.location = 'generatelaporan.php';</script>";
        }

    if(isset($_GET['id'])){
        $id_laporan = $_GET['id'];

        $selectlaporan = "SELECT * FROM laporan WHERE id_laporan = '$id_laporan'";
        $resultselectlaporan = mysqli_query($mysqli,$selectlaporan);
        $rowlaporan = mysqli_fetch_assoc($resultselectlaporan);

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
                <a href="index.php">Home</a> > <a href="generatelaporan.php">Laporan</a> > View Laporan 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2" style="background-color:white; border-radius: 0px 0px 10px 10px; padding-right:30px; padding-left:30px; padding-bottom:15px";>
                    <form action="" method="POST">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>ID User</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $rowlaporan['id_user']; ?>" name="id_user" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Perihal Laporan</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $rowlaporan['perihal_laporan']; ?>" name="perihal_laporan" readonly>
                                </div>
                            </div>       
                            <div class="col">
                                <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Isi Laporan</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isilaporan" readonly><?php echo $rowlaporan['isi_laporan']; ?></textarea>
                            </div>
                    </form>
                </div>
            </div>
        </body>
</html>