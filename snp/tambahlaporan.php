<?php

include_once("db_connection.php");
session_start();

$id_user = $_SESSION['iduser'];
$firstidlaporan = "L0001";

if(isset($_POST['btnaddlaporan'])){

    date_default_timezone_set("Asia/Jakarta");
    $perihal_laporan = $_POST['perihal_laporan'];
    $isi_laporan = $_POST['isilaporan'];
    $tanggal = date("Y/m/d H:i:sa");

    $selectlaporan = "SELECT * FROM laporan ORDER BY id_laporan desc LIMIT 1";
    $resultselectlaporan = $mysqli -> query($selectlaporan);

    if(mysqli_num_rows($resultselectlaporan) === 0){
        $insertfirstlaporan = "INSERT INTO laporan VALUES ('$firstidlaporan','$id_user','$perihal_laporan','$isi_laporan','$tanggal')";
        $resultinsertfirstlaporan = mysqli_query($mysqli,$insertfirstlaporan);

        if($resultinsertfirstlaporan){
            echo "<script type='text/javascript'>alert('Laporan Ditambah'); window.location = 'generatelaporan.php';</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'generatelaporan.php';</script>";
        }
        
    }
    else{
        $laporan_id = $resultselectlaporan -> fetch_array();
        $laporan_id = (int)substr ($laporan_id['id_laporan'],1,);
        $laporan_id++;
        $firstidlaporan = 'L'. str_pad($laporan_id,4,"0",STR_PAD_LEFT);

        $insertlaporan = "INSERT INTO laporan VALUES ('$firstidlaporan','$id_user','$perihal_laporan','$isi_laporan','$tanggal')";
        $resultinsertlaporan = mysqli_query($mysqli,$insertlaporan);

        if($resultinsertlaporan){
            echo "<script type='text/javascript'>alert('Laporan Ditambah'); window.location = 'generatelaporan.php';</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'generatelaporan.php';</script>";
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
                <a href="index.php">Home</a> > <a href="generatelaporan.php">Laporan</a> > Tambah Laporan 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2" style="background-color:white; border-radius: 0px 0px 10px 10px; padding-right:30px; padding-left:30px; padding-bottom:15px";>
                    <form action="" method="POST">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>ID User</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $id_user; ?>" name="id_user" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Perihal Laporan</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perihal Laporan" name="perihal_laporan" required>
                                </div>
                            </div>       
                            <div class="col">
                                <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Isi Laporan</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder = "Isi Laporan" name="isilaporan" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-dark btn-primary btn-block" style="margin-top : 15px;" name="btnaddlaporan">Add Laporan</button>
                    </form>
                </div>
            </div>
        </body>
</html>