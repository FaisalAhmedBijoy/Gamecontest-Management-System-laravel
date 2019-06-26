
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

        background-image: url("https://live.staticflickr.com/4240/35360572331_c7a8047abe_k.jpg");


    }
</style>
<body >
<h1 class="text-center text-light">Game Information </h1>
<div class="container" >

    <table class="table table-bordered table-hover text-light" >


        <thead>


        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>version</th>



        </tr>



        </thead>

        <tbody>




        <?php



        $query="SELECT GAME_ID ,LOWER(GAME_NAME) GAME_NAME,VERSION FROM GAME";
        $select_player_query= mysqli_query($connection ,$query) ;

        while ($row =mysqli_fetch_assoc($select_player_query))
        {


            $game_id =$row['GAME_ID'];
            $game_name=$row['GAME_NAME'];
            $version=$row['VERSION'];




            echo "<tr>";
            echo "<td> $game_id   </td>";
            echo "<td> $game_name </td>";
            echo "<td> $version</td>";



            echo "</tr>";
        }


        ?>
        </tbody>

    </table>

</div>


    <h1 class="text-center text-success">Game Winner Information </h1>
    <div class="container">

        <table class="table table-bordered table-hover text-primary">


            <thead>


            <tr>
                <th>Winner</th>
                <th>point</th>


            </tr>



            </thead>

            <tbody>

            <?php




            $query="SELECT * FROM SCORE";
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




<div class="container">

    <h2 class="text-center text-light">GAME PLAYER & Player Info </h2>

    <table class="table table-bordered table-hover text-info">


        <thead>


        <tr>
            <th>Player id</th>
            <th>Game id</th>
            <th>Game Name</th>
            <th>Version</th>


        </tr>



        </thead>

        <tbody>

        <?php




        $query="SELECT PLAYER_ID,GAME.GAME_ID,GAME_NAME,VERSION FROM PLAY,GAME WHERE PLAY.GAME_ID=GAME.GAME_ID";
        $select_winner_query= mysqli_query($connection ,$query) ;

        while ($row =mysqli_fetch_assoc($select_winner_query))
        {


            $player_id =$row['PLAYER_ID'];
            $game_id=$row['GAME_ID'];

            $game_name =$row['GAME_NAME'];
            $version=$row['VERSION'];


            echo "<tr>";
            echo "<td> $player_id </td>";
            echo "<td> $game_id </td>";
            echo "<td> $game_name </td>";
            echo "<td> $version </td>";


            echo "</tr>";
        }


        ?>
        </tbody>

    </table>

</div>






</body>
</html>