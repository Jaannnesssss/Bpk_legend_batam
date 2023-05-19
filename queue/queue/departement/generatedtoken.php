<?php
	include_once("db_connection.php");
        $cust_select = $mysqli->query("SELECT customer_id FROM customer ORDER BY customer_id DESC limit 1");

        $cust_id_complete = 'TESTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT1111111111111111111111111111111111111111';

        if($cust_select->num_rows > 0)
        {
            $cust_id =$cust_select->fetch_assoc();
            $cust_id = (int)substr ($cust_id['customer_id'], 1,);
            $cust_id++;
            $cust_id_complete = 'C' . str_pad($cust_id, 4, "0", STR_PAD_LEFT);
        } 


?>

<html>
<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<style>
		html,body{
		  width:100%;
		  margin:0;
			height:100%;
		}
		.img-banner{
			background: url('http://localhost/queue/assets/img_resources/background-banner.png') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

</style>

<body class="img-banner"> 
<div class="container w-100 h-100">
	<div class="row align-items-center h-100">
		<div class="col-md-5 offset-md-7 col-sm-12 col-12">
			<div class="card text-center">
				<div class="card-header bg-dark" style="height:75px"></div>
					<div class="card-body">
						<p id="demo" align="center" style="margin-top: 10px;"></p>
						<h5>YOUR NUMBER HAS GENERATED SUCCESSFULLY!</h5></br>
						<p><b>YOUR NUMBER:</b></p>
						<div style="background-color:blanchedalmond; margin:auto; width:50%; height:60px; font-size:1.5em; font-weight:700; margin-bottom:6px;"><?php echo $cust_id; ?></div>
						
						<div class="row row-cols-2">
						<div class="col">Attending: </div>
						<div class="col">Your Position: </div>
					</div>
						
						<a href="y.html" class="btn btn-primary" style="margin-top: 10px; margin-bottom:10px;">PRINT</a>
					<div>
							<div class="card-footer bg-transparent">
								Please take your seat. We will attain you soon!
							</div>
					<div>
				</div>
			</div>
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<script type="text/javascript">
var d = new Date();

var month = new Array();
month[0] = "January";
month[1] = "February";
month[2] = "March";
month[3] = "April";
month[4] = "May";
month[5] = "June";
month[6] = "July";
month[7] = "August";
month[8] = "September";
month[9] = "October";
month[10] = "November";
month[11] = "December";
var n = month[d.getMonth()];


var dateDisplay = d.getDate() + " " + n + " " + d.getFullYear()+ " " + d.getHours() + ":" + d.getMinutes(); 
document.getElementById("demo").innerHTML = dateDisplay;

</script>
					
						
						
