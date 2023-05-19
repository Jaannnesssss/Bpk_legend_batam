<?php
    include_once('db_connection.php');

    session_start();

    if(!isset($_SESSION['login']))
    {
        header("Location: index.php");
        exit;
    }

    if(isset($_POST['Book'])){
        $selectedid_meja = $_POST['Meja_option'];
        $selectedstatus = $_POST['statusmeja_option'];
        $name = $_POST['booker_name'];

        $query = "SELECT * FROM meja where id_meja = '$selectedid_meja'";
        $resultquery = mysqli_query($mysqli, $query);

        $row = mysqli_fetch_assoc($resultquery);
        
        if($row['status_meja'] != $selectedstatus){
            $updateid_meja = "UPDATE meja SET status_meja='$selectedstatus' , nama_booker='$name' WHERE id_meja = '$selectedid_meja'";
            $updateresult = mysqli_query($mysqli,$updateid_meja);
                if($updateresult === TRUE){
                    echo "<script type='text/javascript'>alert('Meja di book'); window.location = 'entrimeja.php';</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'entrimeja.php';</script>";
                }     
        }
        else{
            echo "<script type='text/javascript'>alert('Meja sudah di book'); window.location = 'entrimeja.php';</script>";
        }
    }

    $id_meja = "SELECT * FROM meja ORDER BY id_meja";

    $resultid_meja = mysqli_query($mysqli, $id_meja);
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
                <a href="index.php">Home</a> > Entri Meja
            </div>
                <div class=container>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3" style="background-color:white; border-radius: 0px 0px 10px 10px; padding-right:30px; padding-left:30px; padding-bottom:15px";>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>ID Meja</b></label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="Meja_option">
                                        <?php while($row = mysqli_fetch_array($resultid_meja)):;?>
                                            <option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
                                        <?php endwhile;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Status Meja</b></label>
                                            <select class="form-control" name="statusmeja_option">
                                                <option value=""></option>
                                                <option value="Booked">Booked</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit;";><b>Nama Booker</b></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Booker Name" name="booker_name" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-light btn-primary btn-block" style="margin-top : 15px;" name="Book">Book</button>
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
                                            <th scope="col">ID Meja</th>
                                            <th scope="col">Status Meja</th>
                                            <th scope="col">Nama Booker </th>
                                            <th scope="col">Option </th>
                                        </tr>
                                    </thead>
                                            <?php
                                                $selectedit = $mysqli->query("SELECT * FROM meja WHERE status_meja = 'Booked'");
                                                if ($selectedit->num_rows > 0) {
                                                    while($row = $selectedit->fetch_assoc()) {
                                            ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $row['id_meja']; ?></th>
                                            <td><?php echo $row['status_meja']; ?></td>
                                            <td><?php echo $row['nama_booker']; ?></td>
                                            <td>
                                            <a href="editentrimeja.php?edit=<?php echo $row['id_meja']; ?>"
                                                class="btn btn-info">Edit</a>
                                            <a href="deleteentrimeja.php?delete=<?php echo $row['id_meja']; ?>"
                                                class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php } } ?>
                                </table>
                            </div>
                        </div>
                </div>
        </body>
</html>