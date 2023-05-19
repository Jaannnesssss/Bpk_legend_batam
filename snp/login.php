<?php
//proses login
    include_once('db_connection.php');

    session_start();

    if(isset($_SESSION['login']))
    {
        header("Location: index.php");
        exit;
    }

    if(isset($_POST['login']))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];

        //get IDUser
        $query = "SELECT * FROM pengguna where id_user = '$id'";
        $result = mysqli_query($mysqli, $query);

        //check IDUser
        if(mysqli_num_rows($result) === 1)
        {
            //check username
            $row = mysqli_fetch_assoc($result);
            if($username === $row['username'])
            {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['jabatan'] = $row['level'];
                $_SESSION['iduser'] = $row['id_user'];
  
                header("Location: index.php");
                exit;
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Akun tidak ada, silakan melapor ke bagian IT');</script>";
        }
    }
//akhir proses login
?>


<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <style>
                body{
                    background: url(bg.jpg) no-repeat center center fixed;
                    -webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
					height: 80%;
                }
                .form{
                    position: relative;
                    bottom: -200;
                }
            </style>
    </head>
    <body class="body">
    <div class="container">
        <div class="row" style="margin-top: 7rem; margin-left:-130px;">
				<div class="col-sm-4 offset-sm-7" style="background-color:black;  border-radius: 10px 10px 0px 0px; box-shadow: 10px 10px 20px  grey; padding: 38px;";>
				</div>
	    </div>
				<div class="row" style="margin-left:-130px;";>
					<div class="col-sm-4 offset-sm-7" style="background-color:white; border-radius: 0px 0px 10px 10px; box-shadow: 10px 10px 20px grey; padding-right:30px; padding-left:30px; padding-bottom:15px";>
			    		<form action="" method="POST">
							<h4 align="center" style="margin-top:10px;"> Log In</h4>
								<div class="form-group">
								<label for="InputUserName" style="padding-left: 25px; position:inherit"><b>ID User</b></label>
					    	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your ID" name="id">
								</div>
								<div class="form-group">
								<label for="InputPassword" style="padding-left: 25px ;position:inherit";><b>Username</b></label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Username" name="username">
                                </div>
                                <button type="submit" class="btn btn-block" name="login" style="background-image: linear-gradient(to right, #3333ff , #99ffff); box-shadow: 3px 3px 3px grey; margin-bottom: 10px; font-size: 22px; color: white; letter-spacing:1px">Login</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </body>   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>



