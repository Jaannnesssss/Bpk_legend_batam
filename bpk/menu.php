<?php
    include_once('connection_db.php');
    session_start();

    if(isset($_POST['btnlogout']))
    {
        session_destroy();
        echo "<script type='text/javascript'>window.location = 'main_menu.php';</script>";
    }
?>

<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/menu_style.css">
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
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <?php
                                    $selectcaraousel_image = $mysqli->query("SELECT * FROM menu");
                                    if($selectcaraousel_image ->num_rows> 0){
                                        while($row = $selectcaraousel_image -> fetch_assoc()) {
                                            $id = $row['menu_id'];
                                            $image = $row['image']; 
                                            $menu_name = $row['menu_name'];
                                            $prices = $row['prices'];
                                            $description = $row['description'];
                                            echo 
                                            "
                                            <div class='card-container'>
                                                <a href='menu_selected.php?id=$id&halaman=1' class='hero-image-container'>
                                                    <img class='hero-image' src='$image'/>
                                                </a>
                                                <main class='main-content'>
                                                    <h1><a href='menu_selected.php?id=$id&halaman=1'>$menu_name</a></h1>
                                                    <p class='wrap'>$description</p>
                                                    <div class='flex-row'>
                                                    </div>
                                                </main>
                                                <div class='card-attribute'>
                                                    <p style='font-size:32px;'>$prices</p>
                                                </div>
                                            </div>
                                            ";
                                        }
                                    }
                                ?>
                                <!-- <div class="card-container">
                                    <a href="/" class="hero-image-container">
                                        <img class="hero-image" src="IMG/img_9079.jpg"/>
                                    </a>
                                    <main class="main-content">
                                        <h1><a href="#">Bapi Panggang Karo</a></h1>
                                        <p>Ikon Makanan Dari Restaurant Kami, Dari Bahan Berkualitas, Dimasak Oleh Chef Terverifikasi</p>
                                        <div class="flex-row">
                                        </div>
                                    </main>
                                    <div class="card-attribute">
                                        <p>27.000</p>
                                    </div>
                                </div>
                                <div class="card-container">
                                    <a href="/" class="hero-image-container">
                                        <img class="hero-image" src="IMG/img_9079.jpg"/>
                                    </a>
                                    <main class="main-content">
                                        <h1><a href="#">Bapi Panggang Karo</a></h1>
                                        <p>Ikon Makanan Dari Restaurant Kami, Dari Bahan Berkualitas, Dimasak Oleh Chef Terverifikasi</p>
                                        <div class="flex-row">
                                        </div>
                                    </main>
                                    <div class="card-attribute">
                                        <p>27.000</p>
                                    </div>
                                </div>
                                <div class="card-container">
                                    <a href="/" class="hero-image-container">
                                        <img class="hero-image" src="IMG/img_9079.jpg"/>
                                    </a>
                                    <main class="main-content">
                                        <h1><a href="#">Bapi Panggang Karo</a></h1>
                                        <p>Ikon Makanan Dari Restaurant Kami, Dari Bahan Berkualitas, Dimasak Oleh Chef Terverifikasi</p>
                                        <div class="flex-row">
                                        </div>
                                    </main>
                                    <div class="card-attribute">
                                        <p>27.000</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-4 fh5co-widget">
                            <h4>Tasty</h4>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        </div>
                        <div class="col-md-2 col-md-push-1 fh5co-widget">
                            <h4>Links</h4>
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2 col-md-push-1 fh5co-widget">
                            <h4>Categories</h4>
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Landing Page</a></li>
                                <li><a href="#">Real Estate</a></li>
                                <li><a href="#">Personal</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">e-Commerce</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-md-push-1 fh5co-widget">
                            <h4>Contact Information</h4>
                            <ul class="fh5co-footer-links">
                                <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                                <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            </ul>
                            <ul class="fh5co-footer-links">
                                <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                                <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </footer>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
</html>