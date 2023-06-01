<?php
    include_once('connection_db.php');

    session_start();

    $firstuserid = "U0001";
    $selectuser = "SELECT * FROM user ORDER BY user_id desc LIMIT 1";
    $resultselectuser = $mysqli -> query($selectuser);
    if(isset($_POST['register'])){     
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_name = $_POST['user_name'];     

        if(mysqli_num_rows($resultselectuser) === 0)
        {
            $insertfirstuser = "INSERT INTO user VALUES ('$firstuserid','$email','$password','$user_name', 'admin')";
            $resultinsertfirstuser = mysqli_query($mysqli,$insertfirstuser);

            if($resultinsertfirstuser){
                $_SESSION['login'] = true;
                $_SESSION['username'] = $user_name;
                $_SESSION['access'] = 'admin';
                $_SESSION['iduser'] = $firstuserid;
            }
            else{
                echo "<script type='text/javascript'>alert('Something Wrong With Your Registration, Please Contact The Customer Services'); window.location = 'register.php';</script>";
            }
        }
        else{
            $user_id = $resultselectuser -> fetch_array();
            $user_id = (int)substr ($user_id['user_id'],1,);
            $user_id++;
            $firstuserid = 'U'. str_pad($user_id,4,"0",STR_PAD_LEFT);

            $insertuser = "INSERT INTO user VALUES ('$firstuserid','$email','$password','$user_name', 'user')";
            $resultinsertuser = mysqli_query($mysqli,$insertuser);

            if($resultinsertuser){
                $_SESSION['login'] = true;
                $_SESSION['username'] = $user_name;
                $_SESSION['access'] = 'user';
                $_SESSION['iduser'] = $firstuserid;
            }
            else{
                echo "<script type='text/javascript'>alert(Something Wrong With Your Registration, Please Contact The Customer Services'); window.location = 'register.php';</script>";
            }
        }
    }
?>

<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style>
        body{
            font-family: 'Inter', sans-serif;
        }
        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="IMG/bpk_logo_2.png" />
                </div>
                <div class="col align-self-center" style="vertical-align:bottom;">
                    <h1 class="text-left" style="color:#A71E22; margin-bottom: 50px;"><b>Sign Up</b></h1>
                    <form action="" method="POST" style="width:50%;">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control p-3 border border-dark" id="email" aria-describedby="emailHelp" placeholder="Enter Email here">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control p-3 border border-dark" id="password" placeholder="Enter Password here">
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_name" class="form-control p-3 border border-dark" id="user_name" aria-describedby="emailHelp" placeholder="Enter Name here">
                        </div>
                        <button type="submit" name="register" class="btn btn-primary p-2" style="color:white; background-color:#A71E22; width:270px; font-size:26px; border-radius:10px">Sign up</button>
                        <small id="emailHelp" class="form-text text-muted">Already Have An Account? <b><a href="login.php" style="color:#A71E22;">Log in</a></b></small>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>