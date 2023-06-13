<?php

session_start();

if(isset($_SESSION['OwnerID']))
{
    unset($_SESSION['OwnerID']);
}

if(isset($_SESSION['CommuterID']))
{
    unset($_SESSION['CommuterID']);
}

header("Location: loginOwner.php");
die;