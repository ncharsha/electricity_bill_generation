<?php
    $sn = "localhost";
    $username="root";
    $password="";
    $database="electricity";
    $con=mysqli_connect($sn,$username,$password,$database);

    if($con){
        //echo"connection success ";
    }
else{
    echo"connection failed";
}
?>
