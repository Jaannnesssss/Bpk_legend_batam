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
    #text_menu h1{
        font-size:2.1rem;
        Line-height:1.4;
        Letter-spacing: 0.5rem;
        text-align: center;
        color:white;
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
    .navbar-brand {
        font-family: "Brush Script MT", cursive;
    }
    body{
        font-family: 'Inter', sans-serif;
    }
    a {
        position : absolute;
        bottom: 80px;
        display: inline-block;
        padding: 25px 30px;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: #03e9f4;
        font-size: 1.2rem;
        font-weight: bold;
        transition: .5s;
        overflow: hidden;
    }
    a:hover{
        color: #03e9f4;
        text-decoration: none;
        box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 200px ##03e9f4,
        -webkit-box-reflect: below 1px linear-gradient(transparent, #0005); 
    }
    a span{
        position:absolute;
        display:block;
    }
    a span:nth-child(1){
        top:0;
        left:0;
        width:100%;
        height:1px;
        /* background: linear-gradient(90deg,transparent,#03e9f4); */
    }

    @keyframes animate1 {
        0% {
            left: -100%;
        }
        100%{
            left: 100%:
        }
    }
    a span:nth-child(2){
        top: -100%;
        right: 0;
        width: 1px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: animate2 1s infinite;
    }
    @keyframes animate2{
        0%{
            top: -100%;
        }
        100%{
            top: 100%;
        }
    }
    a span:nth-child(3){
        bottom:0;
        right:0;
        width:100%;
        height:1px;
        background: linear-gradient(270deg,transparent,#03e9f4);
        animation: animate3 1s infinite;
        animation-delay: .25s;
    }

    @keyframes animate3 {
        0% {
            right: -100%;
        }
        100%{
            right: 100%:
        }
    }

    a span:nth-child(4){
        bottom:-100%;
        left:0;
        width:1px;
        height:100%;
        background: linear-gradient(360deg,transparent,#03e9f4);
        animation: animate4 1s infinite;
        animation-delay: .75s;
    }

    @keyframes animate4 {
        0% {
            bottom: -100%;
        }
        100%{
            bottom: 100%:
        }
    }
    </style>
    </head>
        <body style="background: url('menu_background.jpg') no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
            <!-- <nav class="navbar navbar-expand-lg p-2" style="font-size: 18px;">
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
            </nav> -->
            <div class="container">
                <div id="text_menu" class="flex-column bd-highlight mb-3">
                    <h1 class="p-2 bd-highlight">Made With Love</h1>
                    <h1 class="p-2 bd-highlight">To Become Your Favorite</h1>
                <div>
                <div id="button" class="" style="display:flex;flex-direction:column;width:100%;align-items:center">
                    <!-- <button class="rounded-circle" style="margin-top: auto">test</button> -->
                    <!-- <table class="align-items-center" style="height: inherit;"> -->
                        <!-- <tr> -->
                            <!-- <td class="align-middle"> -->
                            <!-- <a style="position: fixed;bottom: 80px;background-color: transparent;padding: 30px;border-radius: 50px 50px 50px 50px;width: 150px;">Test</button> -->
                            <a href="">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Get Started
                            </a>
                            <!-- </td> -->
                        <!-- </tr> -->
                    <!-- </table> -->
                </div>
            </div>
        </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>