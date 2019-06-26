<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamecontest";
// Create connection
$connection =  mysqli_connect($servername, $username, $password,$dbname);

if($connection){
  //  echo "Connection success ";

    if(isset($_GET['submit']))
    {
        //echo "submit button";
        $vol_id=$_GET['vol_id'];
        $vol_name=$_GET['vol_name'];
        $vol_email=$_GET['email'];
       // $mobile=$_GET['mobile'];
        $role=$_GET['role'];


        $query="INSERT INTO volunteer(vol_id,vol_name,email,role) VALUES('$vol_id','$vol_name','$vol_email','$role')";
        $insert_vol_query=mysqli_query($connection,$query);
        if($insert_vol_query){
          //  echo "No problem ";
        }
        else{
            echo "No Problem ";
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

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


<div class="jumbotron">
    <h1 class="display-4 text-center">Volunteer information </h1>

    <hr class="my-4">
    <p class="text-center">volunteer Information Successfully inserted click to go home page  </p>
    <p class="lead text-center">
        <a class="btn btn-primary btn-lg" href="{{url('/homepage')}}" role="button">Home Page</a>

    </p>
</div>

</body>
</html>

