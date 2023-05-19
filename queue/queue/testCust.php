<?php
	$mysqli = new mysqli("localhost","root","","pkl");

	// Check connection
	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}

	$result = $mysqli->query("SELECT * FROM customer");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<style>
		html,body{
		  width:100%;
		  margin:0;
			height:100%;
		}
	</style>
  </head>
  <body>
  <a href="add.php" class="btn btn-info" align="center">Add New User</a><br/><br/>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<table class="table">
					<thead class="thead-dark">
						<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Mobile Number</th>
						<th scope="col">Option</th>
						</tr>
					</thead>
					<?php
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
					?>
					<tbody>
						<tr>
						<th scope="row"><?php echo $row['customer_id']; ?></th>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['mobile_number']; ?></td>
						<td>
							<a href="testCust.php?edit=<?php echo $row['id']; ?>"
								class="btn btn-info">Edit</a>
							<a href="testCust.php?delete=<?php echo $row['id']; ?>"
								class="btn btn-danger">Delete</a>
						</td>
						<td></td>
						</tr>
					</tbody>
					<?php } } ?>
				</table>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>