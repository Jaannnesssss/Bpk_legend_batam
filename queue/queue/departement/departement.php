<?php 
    include_once("db_connection.php");
        //$last_id = mysqli_insert_id($mysqli);
        $dep_select = $mysqli->query("SELECT departement_id FROM departement ORDER BY departement_id DESC limit 1");

        $dep_id_complete = 'D0001';

        if($dep_select->num_rows > 0)
        {
            $dep_id =$dep_select->fetch_assoc();
            $dep_id = (int)substr ($dep_id['departement_id'], 1,);
            $dep_id++;
            $dep_id_complete = 'D' . str_pad($dep_id, 4, "0", STR_PAD_LEFT);
        } 

?>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
	 
<body>
    <div class="container">
        <div class="row">
            <div class="mx col-12">  
                <div class="card" style="margin-top:78px;">
                    <div class="card-header bg-dark text-lg-center text-white"><h1>Add Departement</h1></div>
                        <div class="card-body"> 
                            <form action="add_departement.php" Method="POST">
                                <div class="form-group">
                                    <a href="departement_list.php"><button type="button" class="btn btn-secondary" style="margin-top:20px;margin-bottom:10px; margin-left:15px";>Back To Home</button></a>
                                </div>   
                                <div class="form-group">
                                    <label class="col-sm-2 col-form-label">Departement ID</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="depart_id" value="<?php echo $dep_id_complete; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-form-label">Departement Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="depart_name">
                                    </div>
                                </div>
                                <div class="forn-group">
                                    <button type="submit" class="btn btn-secondary" style="margin-top:20px;margin-bottom:10px; margin-left:15px">Save</button>
                                </div>                    
                            </form>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
		if(isset($_GET['button'])) 
		{
    		$departement_id = $_GET ['departement_id'];
			$departement_name = $_GET ['departement_name'];
			$result = mysqli_query($mysqli, "INSERT INTO departement(departement_id,departement_name,) VALUES('$departement_id','$departement_name')");        }
?>

<script>

</script>

</body>
</html>