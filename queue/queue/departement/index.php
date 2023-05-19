<?php	
	include_once('db_connection.php');
		$query = "SELECT * FROM departement ORDER BY departement_name";

		$result = mysqli_query($mysqli, $query);
?>




<html lang="en">
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<meta name="description" content="">
					<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
						<meta name="generator" content="Jekyll v4.1.1">

							<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
								<style>
									.img-banner {
									background: url('http://localhost/queue/assets/img_resources/background-banner.png') no-repeat center center fixed;
									-webkit-background-size: cover;
									-moz-background-size: cover;
									-o-background-size: cover;
									background-size: cover;
									height: 100%;
									}
									
								</style>
							</head>
								<body class="img-banner">
									<div class="container">
										<div class="row" style="margin-top: 7rem; margin-left:-130px;">
											<div class="col-sm-4 offset-sm-7" style="background-color:black;  border-radius: 10px 10px 0px 0px; box-shadow: 10px 10px 20px  grey; padding: 38px;";>
											
											</div>
										</div>
										<div class="row" style="margin-left:-130px;";>
											<div class="col-sm-4 offset-sm-7" style="background-color:white; border-radius: 0px 0px 10px 10px; box-shadow: 10px 10px 20px grey; padding-right:30px; padding-left:30px; padding-bottom:15px";>
												<form action="cust.php" method="POST">
													<h4 align="center" style="margin-top:10px;"> ENTER YOUR DETAILS</h4>
													<div class="form-group">
													<label for="exampleInputEmail1" style="padding-left: 25px; position:inherit"><b>Name</b></label>
													<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" name="cust_name" required>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1" style="padding-left: 25px ;position:inherit";><b>Mobile Number</b></label>
														<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Number" name="mobile_num" required>
													</div>
													<div class="form-group">
															<label for="exampleFormControlSelect1" style="padding-left: 25px;position:inherit";><b>Departement</b></label>
															<select class="form-control" id="exampleFormControlSelect1" name="Dep_option">
															<?php while($row = mysqli_fetch_array($result)):;?>
															<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
															<?php endwhile;?>
															</select>
													</div>
														<button type="submit" class="btn btn-block" style="background-image: linear-gradient(to right, #3333ff , #99ffff); box-shadow: 3px 3px 3px grey; margin-bottom: 10px; font-size: 22px; color: white; letter-spacing:1px">GENERATE TOKEN</button></a>
												</form>
											</div>
										</div>
									</div>
								</body>
										<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</html>