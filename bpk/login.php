<?php
    include_once('connection_db.php');

    session_start();

    if(isset($_POST['login']))
    {
        $email  = $_POST['email'];
        $password = $_POST['password'];

        //get Email User
        $query = "SELECT * FROM user where email = '$email'";
        $result = mysqli_query($mysqli, $query);

        //check Email User
        if(mysqli_num_rows($result) === 1)
        {
            //check username
            $row = mysqli_fetch_assoc($result);
            if($password === $row['user_password'])
            {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $row['user_name'];
                $_SESSION['access'] = $row['access'];
                $_SESSION['iduser'] = $row['user_id'];
  
                header("Location: main_menu.php");
                exit;
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Account Not Found, Please Register First or Contact Our Customer Services');</script>";
        }
    }
?>

<html>
    <head>
        <title>Log In</title>
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
                    <h1 class="text-left" style="color:#A71E22; margin-bottom: 50px;"><b>Log in</b></h1>
                    <form action="" method="POST" style="width:50%;">
                        <div class="form-group">
                            <input type="text" class="form-control p-3 border border-dark" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email here">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control p-3 border border-dark" name="password" id="password" placeholder="Enter password here">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary p-2" style="color:white; background-color:#A71E22; width:270px; font-size:26px; border-radius:10px">Log in</button>
                        <small id="emailHelp" class="form-text text-muted">Dont Have An Account Yet? <b><a href="register.php" style="color:#A71E22;">Sign Up</a></b></small>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>