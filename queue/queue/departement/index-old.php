<?php
     include_once("db_connection.php");
     {
        $dep_name_select = $mysqli->query("SELECT departement_name FROM departement");
		
		if($dep_name_select->num_rows > 0)
		{
			$result= $dep_name_select->fetch_assoc();	
		}

     }
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<meta name="description" content="">
					<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
						<meta name="generator" content="Jekyll v4.1.1">

							<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
								<style>
									.img-banner {
									background: url('../assets/img_resources/background-banner.png') no-repeat center center fixed;
									-webkit-background-size: cover;
									-moz-background-size: cover;
									-o-background-size: cover;
									background-size: cover;
									}
									
								</style>
							</head>
								<body class="img-banner">
									<form action="show_depart.php" method="POST">
										<div class="container">
											<div class="row" style="margin-top: 7rem; margin-left:-130px;">
												<div class="col-sm-4 offset-sm-7" style="background-color:black;  border-radius: 10px 10px 0px 0px; box-shadow: 10px 10px 20px  grey; padding: 38px;";>
											
												</div>
											</div>
										<div class="row" style="margin-left:-130px;";>
											<div class="col-sm-4 offset-sm-7" style="background-color:white; border-radius: 0px 0px 10px 10px; box-shadow: 10px 10px 20px grey; padding-right:30px; padding-left:30px; padding-bottom:15px";>
												
														<h4 align="center" style="margin-top:10px;"> ENTER YOUR DETAILS</h4>
														<div class="form-group">
															<label for="exampleInputEmail1" style="padding-left: 25px; position:inherit"><b>Name</b></label>
															<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Your Name" required>
														</div>
														<div class="form-group">
															<label for="exampleInputEmail1" style="padding-left: 25px ;position:inherit";><b>Mobile Number</b></label>
															<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobilenum" placeholder="Enter Your Number" required>
														</div>
														<div class="form-group">
															<label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit";><b>Departement</b></label>
															<select class="form-control" id="exampleFormControlSelect1" name="dep_option">
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
														</div>
														<a href="generatedtoken.html"><button type="button" class="btn btn-block" name="generate" style="background-image: linear-gradient(to right, #3333ff , #99ffff); box-shadow: 3px 3px 3px grey; margin-bottom: 10px; font-size: 22px; color: white; letter-spacing:1px";>GENERATE TOKEN</button></a>
												</div>
											</div>
										</div>
									</form>
								</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"/>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js">
<\/script>')</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"/>


</html>