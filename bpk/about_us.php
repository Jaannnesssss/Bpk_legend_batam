<?php
    session_start();

    if(isset($_POST['btnlogout']))
    {
        session_destroy();
        echo "<script type='text/javascript'>window.location = 'main_menu.php';</script>";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/about_us_style.css">
        <script defer src="JS/about_us_app.js"></script>
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
                        <div class="d-flex flex-column justify-content-center align-items-center" style="height:inherit;">
                            <h1 class="text-center align-self-center">
                                About Our Restaurant
                            </h1>
                            <i><h3>
                                Brought To You By YuAiBi
                            </h3></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="second_section">
            <div class="container" style="height:inherit;">
                <div class="row" style="height:inherit;">
                    <div class="col" style="height:inherit;">
                        <div class="d-flex flex-row justify-content-around align-items-center" style="height:inherit;">
                            <img src="IMG/bpk_logo_2.png" style="width:50%" draggable="false"/>
                            <div class="d-flex flex-column align-self-center">
                                <h1>BPK Legend Batam</h1>
                                <p>Restoran Legenda Yang Telah Ada Sejak Jaman Majapahit</p>
                                <p>Dimulai Dari Passion Project 4 Orang</p>
                                <p>Dan Akhirnya Menjadi Bisnis Yang Sukses</p>
                                <br />
                                <p>Semakin Lama, Bukannya Semakin Menurun Tetapi Semakin Meningkat</p>
                                <p>Kami Hanya Ingin Memberikan Orang-Orang Di Sekitar Kami Rasa Dari Masakan Kami</p>
                                <p>Setelah 6 Tahun Lamanya Kami Berbisinis Di Dunia F&B ini</p>
                                <p>Kami Sekarang Mempunyai 2 Cabang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="third_section">
            <h1 class="hidden">UL timeline cards</h1>
            <ul>
                <li style="--accent-color:#41516C" class="hidden">
                    <div class="date">2002</div>
                    <div class="title">Title 1</div>
                    <div class="descr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas itaque hic quibusdam fugiat est numquam harum, accusamus suscipit consequatur laboriosam!</div>
                </li>
                <li style="--accent-color:#FBCA3E" class="hidden">
                    <div class="date">2007</div>
                    <div class="title">Title 2</div>
                    <div class="descr">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos adipisci nobis nostrum vero nihil veniam.</div>
                </li>
                <li style="--accent-color:#E24A68" class="hidden">
                    <div class="date">2012</div>
                    <div class="title">Title 3</div>
                    <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga minima consequuntur soluta placeat iure totam commodi repellendus ea delectus, libero fugit quod reprehenderit, sequi quo, et dolorum saepe nulla hic.</div>
                </li>
                <li style="--accent-color:#1B5F8C" class="hidden">
                    <div class="date">2017</div>
                    <div class="title">Title 4</div>
                    <div class="descr">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, cumque.</div>
                </li>
                <li style="--accent-color:#4CADAD" class="hidden">
                    <div class="date">2022</div>
                    <div class="title">Title 5</div>
                    <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, non.</div>
                </li>
            </ul>
        </section>
        <section class="fourth_section">
            <div class="container" style="height:inherit">
                <div class="row" style="height:inherit">
                    <div class="col text-center" style="height:inherit">
                        <div class="d-flex flex-column justify-content-center" style="height:inherit;">
                            <h1 class="align-self-center">Client's Review</h1>
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <blockquote>"Makananannya Enak, Customer Servicenya Baik"</blockquote>
                                        <i><p>Jannes Velando, Customer Tetap</p></i>
                                    </div>
                                    <div class="carousel-item">
                                        <blockquote>"Makananannya Enak, Customer Servicenya Baik"</blockquote>
                                        <i><p>Vincent Claudius Santoso, Customer Tetap</p></i>
                                    </div>
                                    <div class="carousel-item">
                                        <blockquote>"Makananannya Enak, Customer Servicenya Baik"</blockquote>
                                        <i><p>Fernando Jose, Customer Tetap</p></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="row" style="height:inherit">
            <div class="col text-center align-self-center">
                <div class="d-flex justify-content-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0444595597633!2d104.02784921426588!3d1.12849466256219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9892cff2f9151%3A0x46c8f57026c368fc!2sBPK%20LEGEND%20BATAM%2C%20SEI%20PANAS!5e0!3m2!1sen!2sid!4v1678201657959!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d543.7749380143885!2d103.93473667952102!3d1.0483007285555204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98deb0fa9c88d%3A0xdfb43e3d55c5e555!2sBank%20RiauKepri%20Tunas%20Regency!5e0!3m2!1sen!2sid!4v1678201771054!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div> -->
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
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>