<?php 
        include_once("connection_db.php");
        session_start();
        
        if(isset($_GET['id'])) 
        {
            $id_menu = $_GET['id'];
            $menu_name = "";
            $prices = 0;
            $description = "";
            $image = "";
            $result = $mysqli->query("SELECT * FROM menu WHERE menu_id ='$id_menu'");
        
            if($result)
            {
                $row= $result->fetch_array();
                $id_meja = $row['menu_id'];
                $menu_name = $row['menu_name'];
                $prices = $row['prices'];
                $description = $row['description'];
                $image = $row['image'];
            }

        }

        if(isset($_POST['update'])){
            $folder = $image;
            
            $filename = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            if($filename){
                $folder = "./IMG/product_image/" . $filename;
            }
            $description = $_POST["description"];
            $menu_name = $_POST["menu_name"];
            $prices = $_POST["price"];
            $trimmed_desc = trim($description);

            $sql = "UPDATE menu SET menu_name = '$menu_name', priceS = '$prices', description ='$trimmed_desc', image = '$folder' WHERE menu_id = '$id_menu'";
            
            if(mysqli_query($mysqli, $sql)){
                echo "<script type='text/javascript'>alert('Menu Updated!'); window.location = ' menu_config.php';</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Theres An Error Occured When Updating A Menu'); window.location = 'edit_menu.php?id=$id_menu';</script>";
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
                            <h1>Add Menu</h1>
                            <form action="" method="POST" enctype="multipart/form-data" >
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Menu Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="menu_name" class="form-control" id="inputEmail3" value="<?php echo $menu_name ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Prices</label>
                                    <div class="col-sm-10">
                                    <input type="number" name="price" value="<?php echo $prices ?>" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                                <div class="custom-file mb-3">
                                    <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" value="<?php echo $image ?>">
                                    <label class="custom-file-label" for="validatedCustomFile"><?php echo $image ?></label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="w-100 h-100" name="description"><?php echo $description ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                    <button type="submit" name="update" class="btn btn-primary">Update Menu</button>
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