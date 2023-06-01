<?php
    include_once('connection_db.php');
    session_start();

    $reviewperpage = 3;
    $totalreview = $mysqli->query("SELECT * FROM menu_review");
    $countreview = mysqli_num_rows($totalreview);
    $totalpage = ceil($countreview / $reviewperpage);
    $active_page = (int)( isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
    $starting_data = ($reviewperpage * $active_page) - $reviewperpage;

    $reviews = $mysqli->query("SELECT * FROM menu_review LIMIT $starting_data,$reviewperpage");
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
                $id_menu = $row['menu_id'];
                $menu_name = $row['menu_name'];
                $prices = $row['prices'];
                $description = $row['description'];
                $image = $row['image'];
            }

        }
    
    if(isset($_POST['btnlogout']))
    {
        session_destroy();
        echo "<script type='text/javascript'>window.location = 'main_menu.php';</script>";
    }

    if(isset($_POST['add_review'])){
        $firstreviewid = "R0001";
        $selectreview = "SELECT * FROM menu_review ORDER BY review_id desc LIMIT 1";
        $resultselectreview = $mysqli -> query($selectreview);

        if(mysqli_num_rows($resultselectreview) != 0){
            $review_id = $resultselectreview -> fetch_array();
            $review_id = (int)substr ($review_id['review_id'],1,);
            $review_id++;
            $firstreviewid = 'R'. str_pad($review_id,4,"0",STR_PAD_LEFT);
        }

        $review = $_POST['user_review'];
        $date = date("Y/m/d");
        if ($_SESSION){
            $user_id = $_SESSION['iduser'];
        }

        $sql = "INSERT INTO menu_review VALUES ('$firstreviewid','$review','$date', '$user_id')";

        if(mysqli_query($mysqli, $sql)){
            echo "<script type='text/javascript'>window.location = 'menu_selected.php?id=$id_menu';</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Theres An Error When Adding Your Review'); window.location = 'menu_selected.php?id=$id_menu';</script>";
        }


    }
?>

<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/menu_selected_style.css">
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
                <div class="container" style="margin-top:20px; margin-bottom:20px">
                    <div class="row">
                        <div class="col">
                            <img src="<?php echo $image ?>" class="rounded" width="650" height="450" alt="..." />
                        </div>
                        <div class="col text-justify">
                            <div class="d-flex flex-column">
                                <h2 class="text-left"><b><?php echo $menu_name ?></b></h2>
                                <p style="font-size:18px;"><?php echo $description ?></b></p>
                                <h3 class="align-self-baseline"><b><?php echo $prices ?></b></h3>
                                <div class="d-flex justify-content-between">
                                    <a href="#"><img src="IMG/wa_logo.png" style="width:50px;"/></a>
                                    <a href="#"><img src="IMG/gojek_logo.png" style="width:50px;"/></a>
                                    <a href="#"><img src="IMG/grab_logo.png" style="width:50px;"/></a>
                                    <a href="#"><img src="IMG/shopeefood_logo.png" style="width:50px;"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="second_section">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Reviews</h1>
                            <div class="d-flex flex-column justify-content-center" style="margin-top:10px;">
                                <?php
                                    if($reviews ->num_rows> 0){
                                        while($row = $reviews -> fetch_assoc()) {
                                            $id = $row['review_id'];
                                            $date = str_replace("-","/",$row['date']); 
                                            $review_desc = $row['review_desc'];
                                            $user_id = $row['user_id'];

                                            $selectuser = $mysqli->query("SELECT * FROM user WHERE user_id ='$user_id'");
                                            $rowuser = $selectuser -> fetch_assoc();

                                            $username = $rowuser['user_name'];
                                            echo 
                                            "
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <h5 class='card-title'>$username</h5>
                                                    <p class='card-text'><small class='text-muted'>$date</small></p>
                                                    <p class='card-text'>$review_desc</p>
                                                </div>
                                            </div>
                                            ";
                                        }
                                    }
                                ?>
                                <!-- <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Jannes Velando</h5>
                                        <p class="card-text"><small class="text-muted">26/05/2023</small></p>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Brian Tracia Bahagia</h5>
                                        <p class="card-text"><small class="text-muted">26/05/2023</small></p>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Deric Cahyadi</h5>
                                        <p class="card-text"><small class="text-muted">26/05/2023</small></p>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div> -->
                                <!-- <div class="d-flex flex-row align-items-center"> -->
                                <?php
                                    echo "<ul class='d-flex flex-row align-items-center justify-content-center w-100'>";
                                    for($i = 1; $i <= $totalpage; $i++){
                                        if($i == $active_page){
                                            echo "<li class='active'><a href='?id=$id_menu&halaman=$i'>$i</a></li>";
                                        }
                                        else{
                                            echo "<li ><a href='?id=$id_menu&halaman=$i'>$i</a></li>";
                                        }
                                    }
                                    echo "</ul>"
                                ?>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                if($_SESSION){
                    if($_SESSION['login']){
                        $username = $_SESSION['username'];
                        echo
                        "
                        <section class='third_section'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col'>
                                        <h1>Write Your Own Review!</h1>
                                        <div class='d-flex flex-column justify-content-center' style='margin-top:10px;'>
                                            <div class='card mb-3'>
                                                <div class='card-body' style='background-color:gainsboro;'>
                                                    <h5 class='card-title'>$username</h5>
                                                    <form method='POST' action=''>
                                                        <div class='form-group'>
                                                            <textarea class='form-control' name='user_review' id='exampleFormControlTextarea1' rows='3'></textarea>
                                                        </div>
                                                        <button type='submit' name='add_review' class='btn btn-primary' style='background-color: grey;border-color: grey;'>Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>    
                        ";
                    }
                }
            ?>      
        </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>