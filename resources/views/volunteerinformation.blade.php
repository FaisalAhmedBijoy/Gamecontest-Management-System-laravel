<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamecontest";
// Create connection
$connection =  mysqli_connect($servername, $username, $password,$dbname);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<style>
    body{
        background-image: url('https://live.staticflickr.com/7367/10500332273_9bc0ce353e_b.jpg');

    }
</style>
<body >




<h1 class="text-center">Schedule Timing  </h1>
<div class="container">

    <table class="table table-bordered table-hover text-light">


        <thead>


        <tr>
            <th>Game ID</th>
            <th>Volunteer ID</th>
            <th>Date</th>
            <th>Segment</th>



        </tr>



        </thead>

        <tbody>




        <?php


        $query="SELECT * FROM timing UNION SELECT * FROM schedule";
        $select_timing_query= mysqli_query($connection ,$query) ;

        while ($row =mysqli_fetch_assoc($select_timing_query))
        {


            $vol_id =$row['VOL_ID'];
            $game_id=$row['GAME_ID'];
            $gdate=$row['GDATE'];
            $segment=$row['SEGMENT'];




            echo "<tr>";
            echo "<td> $vol_id   </td>";
            echo "<td> $game_id </td>";
            echo "<td> $gdate</td>";
            echo "<td> $segment </td>";


            echo "</tr>";
        }


        ?>
        </tbody>

    </table>




</div>

<h1 class="text-center">volunteer Information </h1>
<div class="container">

    <table class="table table-bordered table-hover text-info">


        <thead>


        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Role</th>


        </tr>



        </thead>

        <tbody>




        <?php



        $query="call allvol() ";
        $select_vol_query= mysqli_query($connection ,$query) ;

        while ($row =mysqli_fetch_assoc($select_vol_query))
        {


            $vol_id =$row['VOL_ID'];
            $vol_name=$row['VOL_NAME'];
            $email=$row['EMAIL'];
            $mobile=$row['MOBILE'];
            $role=$row['ROLE'];



            echo "<tr>";
            echo "<td> $vol_id   </td>";
            echo "<td> $vol_name </td>";
            echo "<td> $email</td>";
            echo "<td> $mobile </td>";
            echo "<td> $role </td>";


            echo "</tr>";
        }


        ?>
        </tbody>

    </table>




</div>



</body>
</html>