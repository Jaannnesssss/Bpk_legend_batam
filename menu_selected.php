<?php
// session_start();


// if(!isset($_SESSION['login']))
// {
//     header("Location: login.php");
// }

// if(isset($_POST['btnlogout']))
// {
//     session_destroy();
//     echo "<script type='text/javascript'>alert('Berhasil Log Out'); window.location = 'login.php';</script>";
// }
?>

<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
        background-color:white;
    }
    h1{
        font-size:2.1rem;
        Line-height:1.4;
        Letter-spacing: 0.5rem;
        text-align: center;
        color:black;
        margin-top:50px;
    }
    .slideshow{
        width: 70%;
        height: 400px;
        position: absolute;
        left: 50%;
        top: 48%;
        transform: translate(-50%, -40%);
        background-image: url(slidepic1.JPG);
        background-size: 100% 100%;
        box-shadow: 1px 2px 10px grey;
        animation:slider 9s infinite linear;
        animation-delay: 3s, 200ms;
    }

    @keyframes slider{
        0%{background-image: url(slidepic1.JPG);}
        33%{background-image: url(slidepic2.JPG);}
        66%{background-image: url(slidepic3.JPG);}
    }

    .linktop{
        position: absolute;
        top: 590px;
        left: 440px;
        letter-spacing: 2px;
    }
    .linkbot{
        position: absolute;
        top: 625px;
        left: 575px;
        letter-spacing: 2px;
    }
    
    tr.linktop td{
        border-top: 0px solid;
        border-bottom: 0px solid;
        border-right: 1px solid black;
        border-left: 1px solid black;
        padding-left: 4px;
        padding-right: 2px;
    }

    tr.linkbot td{
        border-top: 0px solid;
        border-bottom: 0px solid;
        border-right: 1px solid black;
        border-left: 1px solid black;
        padding-left: 4px;
        padding-right: 2px;
    }
    .d-flex img{
        margin-right: 20px;
    }
     .navbar-brand {
        font-family: "Brush Script MT", cursive;
     }
    body {
        font-family: 'Inter', sans-serif;
     }
    </style>
    </head>
        <body>
            <nav class="navbar navbar-expand-lg p-1 border-bottom border-dark" style="font-size: 18px;">
                <a class="navbar-brand" href="#">
                    <img src="bpk_logo_2.png" style="width:120px;" alt="">
                </a>

                <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarSupportedContent">
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">HOME<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">ABOUT<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">MENU<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">ORDER ONLINE<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;"><img src="user_icon.png" style="width:30px;"></img><span style="margin-left: 30px;">LOG IN</span></a>
                    </div>
                </div>
            </nav>
            <div class="container" style="margin-top:20px; margin-bottom:20px">
                <div class="row">
                    <div class="col">
                        <img src="IMG_9085.JPG" class="rounded" width="650" height="450" alt="..." />
                        <div class="d-flex justify-content-center" style="margin-top:10px;">
                            <img src="IMG_9085.JPG" class="rounded" width="75" height="75" alt="...">
                            <img src="IMG_9085.JPG" class="rounded" width="75" height="75" alt="...">
                            <img src="IMG_9085.JPG" class="rounded" width="75" height="75" alt="...">
                        </div>
                    </div>
                    <div class="col text-justify">
                        <h1 class="text-left"><b>KIDU-KIDU</b></h1>
                        <p style="font-size:18px;">THIS IS FOOD DESCRIPTION, IM TRYING TO MAKE THIS DESCRIPTION AS LONG AS POSSBILE FOR WHAT I CAN IMAGINE, SO PLEASE DO UNDERSTAND THAT THIS IS NOT THE FIXED DESIGN, A LOT OF THINGS ARE BAD HERE SO PLEASE DONT WORRY AND HELP ME I CANT DO WEB FRONTEND</b></p>
                        <h3><b>IDR 0</b></h3>
                        <button type="button" style="background-color:#A71E22;" class="btn btn-primary btn-lg btn-block text-center rounded align-self-end">Order Online</button>
                    </div>
                </div>
            </div>          
        </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>