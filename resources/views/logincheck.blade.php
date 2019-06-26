<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamecontest";

$connection =  mysqli_connect($servername, $username, $password,$dbname);
//echo "connection success";

?>

<?php


if (isset($_GET['submitbutton']) ) {





    $useremail="faisal.cse16.kuet@gmail.com";
    $userpassword="01623155000";

    $inputemail=$_GET['useremail'];
    $inputpassword=$_GET['userpassword'];
    $query="INSERT INTO login(email,password) VALUES('$inputemail','$inputpassword')";
    $insert_user_query=mysqli_query($connection,$query);


    if ($userpassword ==$inputpassword and $useremail == $inputemail) {

       // echo "Password Match";
        //echo $inputemail;
        //echo $inputpassword;
        //header("Location: homepage.php");

    }
    else{
        echo "Password not match";
        //header("Location : index.php");
    }


}
else{
    echo "submit not press";
}



?>



        <!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body style="background-image: url('https://live.staticflickr.com/1725/41439614815_3cdc861cd7_k.jpg')">

<div class="down">


    <hr class="my-4">
    <h2 class="text-light"> Gaming is not a crime ,  Here winning is everthing  </h2>

    <h3 class="text-light">Cyborg - Gaming club of KUET </h3>
    <pre>





    </pre>
    <h3 class="text-center text-success">Let's Start The Gaming  </h3>
    <p class="lead text-center">
        <a class="btn btn-primary " href="{{url('/homepage')}}" role="button">Start Now </a>

    </p>
</div>


</body>
</html>