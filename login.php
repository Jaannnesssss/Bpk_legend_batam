<?php

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
                    <img src="bpk_logo_2.png" />
                </div>
                <div class="col align-self-center" style="vertical-align:bottom;">
                    <h1 class="text-left" style="color:#A71E22; margin-bottom: 50px;"><b>Log in</b></h1>
                    <form style="width:50%;">
                        <div class="form-group">
                            <input type="text" class="form-control p-3 border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email here">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control p-3 border border-dark" id="exampleInputPassword1" placeholder="Enter password here">
                        </div>
                        <button type="submit" class="btn btn-primary p-2" style="color:white; background-color:#A71E22; width:270px; font-size:26px; border-radius:10px">Log in</button>
                        <small id="emailHelp" class="form-text text-muted">Dont Have An Account Yet? <b><a href="#" style="color:#A71E22;">Sign Up</a></b></small>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>