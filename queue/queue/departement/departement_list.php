<?php
	include_once("db_connection.php");

		$result = $mysqli->query("SELECT * FROM departement");
?>
	
<!doctype html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table table-bordered table-hover">
					<thead class="thead-light text-center">
						<tr>
							<th colspan="3"><a href="departement.php"><button type="button" class="btn btn-outline-dark">Add A New Departmeent</button></a></th>
						</tr>
					</thead>
					<thead class="thead-dark text-center">
						<tr>
							<th scope="col">Departement ID</th>
                        	<th scope="col">Departement Name</th>
                        	<th scope="col">Option </th>
						</tr>
					</thead>
							<?php
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
							?>
					<tbody>
						<tr>
							<th scope="row"><?php echo $row['departement_id']; ?></th>
                        	<td><?php echo $row['departement_name']; ?></td>
                        	<td>
							<a href="edit.php?edit=<?php echo $row['departement_id']; ?>"
								class="btn btn-info">Edit</a>
							<a onclick="return confirm('Are you sure you want to delete this item?');"  href="delete.php?delete=<?php echo $row['departement_id']; ?>"
								class="btn btn-danger">Delete</a>
							</td>
						</tr>
					</tbody>
					<?php } } ?>
				</table>
			</div>
	    </div>
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
