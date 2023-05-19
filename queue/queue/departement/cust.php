<?php 
    include_once('db_connection.php');

        $customer_name = $_POST['cust_name'];
        $mobile_number = $_POST['mobile_num'];
        $existing_cust_select = $mysqli->query("SELECT customer_id FROM customer WHERE mobile_number='$mobile_number'");
        
        $customer_id;
        
        if($existing_cust_select->num_rows == 0)
        {
            $cust_select = $mysqli->query("SELECT customer_id FROM customer ORDER BY customer_id DESC limit 1");
            $cust_id_complete = 'C0001'; 
            if($cust_select->num_rows > 0)
            {
                $cust_id =$cust_select->fetch_assoc();
                $cust_id = (int)substr ($cust_id['customer_id'], 1,);
                $cust_id++;
                $cust_id_complete = 'C' . str_pad($cust_id, 4, "0", STR_PAD_LEFT);
                $customer_id = $cust_id_complete;
            } 
            
            $query = ("INSERT INTO customer (customer_name,mobile_number,customer_id) VALUES ('$customer_name', '$mobile_number','$cust_id_complete')");
            $result = mysqli_query($mysqli, $query);
        }
        else
        {
            $customer_id = $existing_cust_select->fetch_assoc()['customer_id'];
            $customer_id = $mysqli->query("SELECT customer_id FROM customer WHERE mobile_number='$mobile_number'");

        }

        // generate token
        $department_id = $_POST['Dep_option'];
        $register_date = date("Y-m-d H:i:s");


        $token_number = ("INSERT INTO token (customer_id, departement_id, register_date) VALUES ('$customer_id','$department_id','$register_date')");
        $token_result = mysqli_query($mysqli,$token_number);




        header("Location: generatedtoken.php");


?>