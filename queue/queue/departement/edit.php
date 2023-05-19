<?php
    include_once("db_connection.php");
     
    if(isset($_GET['edit'])) 
    {
        $departement_id = $_GET['edit'];
        $departement_name = "";
        $result = $mysqli->query("SELECT * FROM departement WHERE departement_id='$departement_id'");
       
        if($result)
        {
            $row= $result->fetch_array();
            $departement_id = $row['departement_id'];
            $departement_name = $row['departement_name'];
        }

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
                    <div class="card-header bg-dark text-lg-center text-white"><h1>Update Departement</h1></div>
                        <div class="card-body"> 
                            <form action="update.php" Method="POST">
                                <div class="form-group row">
                                    <a href="departement_list.php"><button type="button" class="btn btn-secondary" style="margin-top:20px;margin-bottom:10px; margin-left:30px";>Back To Home</button></a>
                                </div>   
                                <div class="form-group">
                                    <label class="col-sm-2 col-form-label">Departement ID</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="depart_id" value="<?php echo $departement_id ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-form-label">Departement Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="depart_name" value="<?php echo $departement_name ?>">
                                    </div>
                                </div>
                                <div class="forn-group">
                                    <button type="submit" class="btn btn-secondary" name="update" style="margin-top:20px;margin-bottom:10px; margin-left:15px">Update</button>
                                </div>                    
                            </form>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>