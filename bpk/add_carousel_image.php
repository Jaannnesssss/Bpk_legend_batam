<?php
    include_once('connection_db.php');

    session_start();

    $msg = "";
    $firstcarousel_imageid = "C0001";
    $selectcarousel_image = "SELECT * FROM caraousel_image ORDER BY caraousel_id desc LIMIT 1";
    $resultselectcarousel_image = $mysqli -> query($selectcarousel_image);
    // If upload button is clicked ...
    if (isset($_POST['upload'])) {

        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "./IMG/" . $filename;

        $status = $_POST["status"];

        if(mysqli_num_rows($resultselectcarousel_image) != 0){
            $caraousel_id = $resultselectcarousel_image -> fetch_array();
            $caraousel_id = (int)substr ($caraousel_id['caraousel_id'],1,);
            $caraousel_id++;
            $firstcarousel_imageid = 'C'. str_pad($caraousel_id,4,"0",STR_PAD_LEFT);
        }
        // Get all the submitted data from the form
        $sql = "INSERT INTO caraousel_image VALUES ('$firstcarousel_imageid','$folder', '$status')";
        
        // Execute query
        
        move_uploaded_file($tempname, $folder);

        if(mysqli_query($mysqli, $sql)){
            echo "<script type='text/javascript'>alert('Image Uploaded Successfully'); window.location = 'carousel_image.php';</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Theres An Error When Uploading Image'); window.location = 'add_carousel_image.php';</script>";
        }
        
    }
?>



<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html>
    <head>
        <meta charset="utf-8">
        <!-- <title>Responsive Sidebar Menu</title> -->
        <link rel="stylesheet" href="CSS/add_carousel_image_style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="IMG/bpk_logo_2.png" style="width:100px;"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main_menu.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Order
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Whatsapp</a>
                    <a class="dropdown-item" href="#">GoFood</a>
                    <a class="dropdown-item" href="#">GrabFood</a>
                    <a class="dropdown-item" href="#">ShoppeFood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About-us</a>
                </li>
                <?php
                    if($_SESSION){
                        if($_SESSION['access'] === 'admin'){
                            echo"<li class='nav-item'>";
                            echo"<a class='nav-link' href='admin_config.php'>Admin Configuration</a>";
                            echo"</li>";
                        }
                    }
                ?>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST" action="">
                    <?php
                        if($_SESSION){
                            if($_SESSION['login'] === FALSE){
                                echo "<a href='login.php'>Login</a>";
                                echo "<span> Or </span>";
                                echo "<a href='register.php'>Register</a>";
                            }
                            else{
                                echo "<button name='btnlogout' type='submit' style='letter-spacing: 3px;padding:10px;background-color:white;color:black;font-size:24px;border-color:white;border:none;'>Log out</button>";
                            }
                        }
                        else{
                            echo "<a href='login.php'>Login</a>";
                            echo "<span> Or </span>";
                            echo "<a href='register.php'>Register</a>";
                        }
                    ?>
                </form>
            </div>
        </nav>
        <section class="first_section">
            <div class="container" style="height:inherit;">
                <div class="row" style="height:inherit;">
                    <div class="col" style="height:inherit;">
                        <div class="d-flex flex-column justify-content-center" style="height:inherit;">
                            <h1>Add Carousel Image</h1>
                            <form action="" method="POST" enctype="multipart/form-data" >
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="status" value="1" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Set As Active Carousel Image</label>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                    <button type="submit" name="upload" class="btn btn-primary">Add Carousel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>
</html>