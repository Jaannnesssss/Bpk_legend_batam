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
     .navbar-brand {
        font-family: "Brush Script MT", cursive;
     }
    body{
        font-family: 'Inter', sans-serif;
     }
    </style>
    </head>
        <body>
            <nav class="navbar navbar-expand-lg p-2" style="font-size: 18px;">
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
                        <a class="nav-link" href="index.php" style="color: black;">SHOP<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                    <a class="nav-link" href="index.php" style="color: black;">BLOG<span class="sr-only">(current)</span></a>
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
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="bpk_logo_2.png" />
                    </div>
                    <div class="col align-self-center text-justify text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim sem aliquam risus vestibulum elementum. Vestibulum at mollis nulla. Integer purus dui, tempor vitae tortor at, tincidunt aliquam augue. Ut ut convallis metus, non ultrices tortor. Nunc a urna lacinia, venenatis velit ac, pulvinar arcu. Cras non ante auctor, feugiat libero vitae, accumsan mauris. Nullam quis mauris ante. Nulla facilisi. Sed dolor libero, ornare vitae mi non, sodales ornare nulla. Curabitur ornare, tortor tempor lacinia tincidunt, nunc mi convallis tellus, ac pretium lorem turpis eu elit.

                        Vivamus gravida risus metus, nec feugiat nunc blandit sed. Vivamus eu dapibus arcu. Maecenas commodo nisl nec maximus rhoncus. Nullam nec ultricies sem. Cras est magna, fringilla vitae velit a, ultricies gravida urna. Vivamus lacinia scelerisque enim, non euismod diam auctor non. Morbi ut libero sit amet lacus feugiat sollicitudin. Sed placerat lacus dolor, tempor sollicitudin lectus volutpat molestie. Ut fermentum consectetur faucibus. Mauris pulvinar at tortor sit amet euismod. Aenean facilisis rutrum nunc eget interdum. Ut iaculis tristique nisl elementum congue. Morbi in est finibus, ornare elit consectetur, facilisis lectus. Aenean at velit et massa bibendum laoreet.
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h3>Visi</h3>
                        <hr style="background-color: black; width: 100px; height:1px;"/>
                    </div>
                    <div class="col text-center">
                        <h3>Misi</h3>
                        <hr style="background-color: black; width: 100px; height:1px;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm align-self-center text-justify text-center">
                        MEMBAWAKAN HIDANGAN YANG NIKMAT KEPADA ORANG-ORANG SEKITAR YANG BELUM PERNAH MENCOBA
                    </div>
                    <div class="col-sm align-self-center text-justify text-center">
                        MENJADI ONE PIECE
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h3>Branches</h3>
                        <hr style="background-color: black; width: 100px; height:1px;"/>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-sm border-2 border-right border-dark">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0444595597633!2d104.02784921426588!3d1.12849466256219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9892cff2f9151%3A0x46c8f57026c368fc!2sBPK%20LEGEND%20BATAM%2C%20SEI%20PANAS!5e0!3m2!1sen!2sid!4v1678201657959!5m2!1sen!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-sm" style="margin-left: 5px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d543.7749380143885!2d103.93473667952102!3d1.0483007285555204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98deb0fa9c88d%3A0xdfb43e3d55c5e555!2sBank%20RiauKepri%20Tunas%20Regency!5e0!3m2!1sen!2sid!4v1678201771054!5m2!1sen!2sid" width="570" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <footer class="p-4" style="background-color: black; height:300px">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1 style="color:white">BPK Legend</h1>
                            <p style="margin-top:10px;" class="d-flex justify-content-around">
                                <a style="color:#838585;"href="#">HOME</a>
                                <a style="color:#838585;"href="#">ABOUT</a>
                                <a style="color:#838585;"href="#">SHOP</a>
                                <a style="color:#838585;"href="#">BLOG</a>
                                <a style="color:#838585;"href="#">MENU</a>
                                <a style="color:#838585;"href="#">ORDER</a>
                            </p>
                            <!-- <p class="d-flex justify-content-center">
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                            </p> -->
                        </div>
                    </div>
                </div>
            </footer>
            <!-- <div class="slideshow"></div> 
            <table>
                <tr class="linktop">
                    <td><a href="prosesentrimeja.php">Entri Meja</a></td>
                    <td><a href="prosesentribarang.php">Entri Barang</a></td>
                    <td><a href="prosesentriorder.php">Entri Order</a></td>
                    <td><a href="prosesentritransaksi.php">History Transaksi</a></td>
                </tr>
                <tr class="linkbot">
                    <td><a href="prosesgeneratelaporan.php">Generate Lapotan</a></td>
                </tr>
            </table> -->

            
        </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>