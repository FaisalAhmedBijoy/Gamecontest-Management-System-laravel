
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

        background-image: url("https://live.staticflickr.com/2938/13980421390_1d0f5f113a_h.jpg");



    }
</style>
<body >




<div class="container">

    <h2 class="text-center">Winner Pointer greater from AVG Point</h2>

    <table class="table table-bordered table-hover text-primary">


        <thead>


        <tr>
            <th>Winner</th>
            <th>point</th>


        </tr>



        </thead>

        <tbody>

        <?php




        $query="SELECT * FROM SCORE WHERE POINT> (SELECT AVG(POINT)FROM SCORE)";
        $select_winner_query= mysqli_query($connection ,$query) ;

        while ($row =mysqli_fetch_assoc($select_winner_query))
        {


            $winner =$row['WINNER'];
            $point=$row['POINT'];


            echo "<tr>";
            echo "<td> $winner </td>";
            echo "<td> $point </td>";

            echo "</tr>";
        }


        ?>
        </tbody>

    </table>

</div>

<div class="container text-danger">
   <h1 class="text-center"> Result Analysis</h1>
    <?php

    $sql="SELECT COUNT(*) AS Total FROM GAME";
    $records=mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($records);
    echo "<h3> Total Game  Number: ".$row['Total']."<h3>";

    $query="SELECT MAX(POINT)  POINT,WINNER  FROM SCORE";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($result);

    echo "<p>Winner of the Game : ".$row['WINNER']." ,  Point : ". $row['POINT'] ."</p>";



//    $query="SELECT AVG(POINT)  POINT  FROM SCORE";
    $query="SELECT avgscore() AS POINT ";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($result);
    echo "<h4> AVG Point of Gamer : ".$row['POINT']."<h4>";



    ?>




</div>


</body>
</html>