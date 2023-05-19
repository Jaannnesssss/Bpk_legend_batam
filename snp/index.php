<?php
session_start();


if(!isset($_SESSION['login']))
{
    header("Location: login.php");
}

if(isset($_POST['btnlogout']))
{
    session_destroy();
    echo "<script type='text/javascript'>alert('Berhasil Log Out'); window.location = 'login.php';</script>";
}
?>

<html>
    <head>
    <title>Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
        background-color:seashell;
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
        color:pink;
        
     }
    </style>
    </head>
        <body>
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
            <span class="navbar-brand mb-0 h1">La Forte</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST">
                    <button class="btn-dark my-2 my-sm-0" name="btnlogout" type="submit">Log out</button>
                </form>
            </div>
            </nav>

            <h1>Welcome <?php echo $_SESSION['jabatan']; ?> <?php echo $_SESSION['username'];?></h1>
            <div class="slideshow"></div> 
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
            </table>

            
        </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>