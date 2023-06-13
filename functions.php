<?php

    function check_login_owner($con)
    {
        if(isset($_SESSION['OwnerID']))
        {
            $id = $_SESSION['OwnerID'];
            $query = "select * from owner where OwnerID = '$id' limit 1";

            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }

        //redirect to login
        header("Location: loginOwner.php");
        die;
    }

    function check_login_commuter($con)
    {
        if(isset($_SESSION['CommuterID']))
        {
            $id = $_SESSION['CommuterID'];
            $query = "select * from commuter where CommuterID = '$id' limit 1";

            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }

        //redirect to login
        header("Location: loginCommuter.php");
        die;
    }

    function check_login_admin($con)
    {
        if(isset($_SESSION['AdminID']))
        {
            $id = $_SESSION['AdminID'];
            $query = "select * from admin where AdminID = '$id' limit 1";

            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }

        //redirect to login
        header("Location: loginAdmin.php");
        die;
    }

    function random_num($length)
    {
        $text = "";
        if($length < 5)
        {
            $length = 5;
        }

        $len = rand(4,$length);

        for($i=0; $i<$len; $i++){
            $text .= rand(0,9);
        }
        return $text;
    }