<?php 
    session_start();

    if(isset($_POST['btnlogout']))
    {
        session_destroy();
        echo "<script type='text/javascript'>window.location = 'main_menu.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/main_menu_style.css">
        <script defer src="JS/app.js"></script>
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
            <div class="container" style="height:inherit">
                <div class="row" style="height:inherit">
                    <div class="col text-center align-self-center">
                        <h1 style="background: -webkit-linear-gradient(white, whitesmoke);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 74px;">The Best BPK</h1>
                        <h1 style="background: -webkit-linear-gradient(white, whitesmoke);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 74px;">Restaurant in Batam</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="second_section"> 
            <div class="container" style="height:inherit">
                <div class="row" style="height:inherit">
                    <div class="col text-center align-self-center">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="IMG/caraousel1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="IMG/caraousel2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="IMG/caraousel3.jpg" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="third_section hidden">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <h2>Best Seller Menu Kami!</h2>
                                <h3>Makanan Yang Kami Banggakan Dan Telah Menjadi Ikon Dari Restoran Kami</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6" style="display:flex; align-items:center;">
                        <div class="d-flex flex-row">
                            <div class="p-2 justify-content">
                                <h2>Datang Dari Daging Yang Berkualitas,</h2> 
                                <h2>Dimasak dengan Bumbu Rasa Khas BPK Legend Batam</h2>
                                <h2>Di Tambah Lagi Dengan Hidangan Sup Yang Aromanya Nikmat,</h2>
                                <h2>Menjadikan Ini Best Seller Kami </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- <div class="d-flex flex-row-reverse">
                            <div class="p-2">
                                <ol class="image_slider">
                                    <li class="border rounded-circle">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                </ol>
                            </div>
                        </div> -->
                        <div class="d-flex flex-row-reverse">
                            <div class="p-2 align-items-right">
                                <img src="IMG/img_9079.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth_section hidden">
            <div class="container" style="height:inherit">
                <div class="row" style="height:inherit">
                    <div class="col text-center align-self-center">
                        <h1>Order Makanan Kami Sekarang!!</h1>
                        <h3>Restoran Kami Terdaftar Dalam Setiap Aplikasi Pesanan Online, Seperti GrabFood, GoFood, ShopeeFood</h3>
                        <h3>Atau Bahkan Jika Kamu ingin Memesan Langsung, Dapat Hubungi Nomor Kami</h3>
                        <div class="d-flex justify-content-center">
                            <a href="#"><img src="IMG/wa_logo.png" /></a>
                            <a href="#"><img src="IMG/gojek_logo.png" /></a>
                            <a href="#"><img src="IMG/grab_logo.png" /></a>
                            <a href="#"><img src="IMG/shopeefood_logo.png" /></a>
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
        <!-- <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table border border dark">
                        <tr>
                            <td class="text-center">
                                <span>OUR BEST SELLING MENU</span>
                            </td>
                            <td rowspan="2" class="text-center align-middle" style="width:">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="menu_background.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="menu_background_2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="menu_background_3.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <span>This is the description of the menu</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>