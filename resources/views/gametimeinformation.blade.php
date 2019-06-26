<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamecontest";
// Create connection
$connection =  mysqli_connect($servername, $username, $password,$dbname);

if($connection){
    echo "Connection success ";

    if(isset($_GET['submit']))
    {
        echo "submit button";
        $gamedate=$_GET['gamedate'];
        $segment=$_GET['segment'];

        $query="INSERT INTO schedule(GDATE,SEGMENT) VALUES('$gamedate','$segment')";
        $insert_gametime_query=mysqli_query($connection,$query);
        if($insert_gametime_query){
            echo "No problem ";
        }
        else{
            echo " Problem ";
        }

    }


    else{
        echo "Not press submit";
    }

    unset($_GET['submit']);


}
else{
    echo "Connection Error";
}

?>