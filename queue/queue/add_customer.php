<?php
    include_once("db_connection.php");

 

  

    $customer_id = $_POST['ID'];
	$name = $_POST ['name'];
	$mobile_number = $_POST ['mobilenum'];


    echo "<br/>";
    echo $_POST['ID'];
    echo "<br/>";
    echo $_POST['name'];
    echo "<br/>";
    echo $_POST['mobilenum'];

    $stmt = $mysqli->prepare("INSERT INTO customer(customer_id,name,mobile_number) VALUES (?, ?, ?)");
    $stmt->bind_param('sss',$customer_id, $name, $mobile_number);
    if($stmt->execute()){
        $stmt->close();
        header("Location: testCust.php"); 
    }
    else{
        
    }
    

	// Check If form submitted, insert form data into users table.
	//  if(isset($_GET['button'])) {
    //     $customer_id = $_GET ['id'];
	//  	$name = $_GET ['name'];
	//  	$mobile_number = $_GET ['mobilenum'];
		
	// 	// include database connection file
	// 	include_once("testCrun.php");
				
	//  Insert user data into table
	// $result = mysqli_query($mysqli, "INSERT INTO customer(ID,name,mobilenum) VALUES('$customer_id','$name','$mobile_number')");
		
	// 	// Show message when user added
	// 	echo "User added successfully. <a href='index.php'>View Users</a>";
    // }
    

?>