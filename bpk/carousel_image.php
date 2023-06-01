<?php 

    include_once("connection_db.php");
    session_start();
?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html>
    <head>
        <meta charset="utf-8">
        <!-- <title>Responsive Sidebar Menu</title> -->
        <link rel="stylesheet" href="CSS/caraousel_image_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                        <div class="d-flex flex-row-reverse" style="height:inherit;">
                            <a href="add_carousel_image.php" class="btn btn-primary btn-lg btn-block">Add Carousel</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="second_section">
            <div class="container" style="height:inherit;">
                <div class="row" style="height:inherit;">
                    <div class="col" style="height:inherit;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $selectcaraousel_image = $mysqli->query("SELECT * FROM caraousel_image");
                                    if($selectcaraousel_image ->num_rows> 0){
                                        while($row = $selectcaraousel_image -> fetch_assoc()) { 
                                ?>
                                    <tr>
                                        
                                        <td>
                                            <?php 
                                            $image = $row['image']; 
                                            echo "<img src='$image' style='width:150px'/>" 
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                $id = $row['caraousel_id'];
                                                echo "<div class='d-flex flex-row'>";
                                                if($row['status'] === "0"){
                                                    echo "<a href='active_cimage.php?id=$id' class='btn btn-success'>Set As Active</a>";
                                                }
                                                else{
                                                    echo "<a href='remove_cimage.php?id=$id' class='btn btn-secondary'>Remove As Active</a>";
                                                }
                                                echo "<a href='delete_cimage.php?id=$id' class='btn btn-danger ml-auto'>Delete Image</a>";
                                                echo "</div>";
                                            ?>
                                        </td>
                                    </tr>
                                <?php } }?>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>