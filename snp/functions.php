<?php

function check_login($mysqli)
{
    if(isset($_SESSION['id_user']))
    {
        $id = $_SESSION['id_user'];
        $query = "select * from penggunan where '$id' = id_user limit = 1";

        $result = mysqli_query($mysqli, $query);

        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //redirect to login

    header("Location: login.php");
}