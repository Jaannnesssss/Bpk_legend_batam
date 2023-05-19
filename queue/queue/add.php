<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 
<body>
	<a href="testCust.php" class>Go to Home</a>
	<br/><br/>
 
	<form action="add_customer.php" method="post">
		<div class="container">
		    <div class="row justify-content-center">
			    <div class="col-12">
				    <table class="table">
					    <thead class="thead-dark">
						<tr>
							<td>ID</td>
							<td><input type="text" name="ID"></td>
						</tr>
						<tr> 
							<td>Name</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr> 
							<td>Mobile Number</td>
							<td><input type="text" name="mobilenum"></td>
            			</tr>
            			<tr>
                			<td><button type="submit">Save</button></td>
           				 </tr>
					</table>
				</div>
			</div>
		</div>
	</form>

	
	<?php
 
	
	if(isset($_GET['button'])) {
        $customer_id = $_GET ['id'];
		$name = $_GET ['name'];
		$mobile_number = $_GET ['mobilenum'];
		
		// include database connection file
		include_once("db_connection.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO customer(ID,name,mobilenum) VALUES('$customer_id','$name','$mobile_number')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>