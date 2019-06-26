

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

<style>
    body{
        background-color: darkslategray;
    }
</style>
<body >


<div class="jumbotron text-info" style="background-color: darkgreen">
    <h1 class="display-4 text-center">Player information </h1>

    <hr class="my-4">
    <p class="text-center">Add player information and show the player information </p>
    <p class="lead text-center">
        <a class="btn btn-primary btn-lg" href="{{url('player')}}" role="button">Add Player</a>
        <a class="btn btn-primary btn-lg" href="{{url('showplayer')}}" role="button">show player</a>
    </p>
</div>



<div class="jumbotron jumbotron-fluid text-success" style="background-color: darkslategray">
    <div class="container">
        <h1 class="display-4 text-center">Volunteer information</h1>
        <p class="lead text-center">Add volunteer information and show volunteer</p>

    </div>
    <hr class="my-4">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class=" btn btn-primary btn-lg" href="{{url('volunteer')}}">Add Volunteer</a>
        </li>

        <li class="nav-item">
            <a class=" btn btn-primary btn-lg" href="{{url('showvolunteer')}}">show volunteer</a>
        </li>


    </ul>



</div>


<div class="jumbotron text-light " style="background-color: darkgreen">
    <h1 class="display-4 text-center">Game information </h1>

    <hr class="my-4">
    <p class="text-center">Add player information and show the player information </p>
    <p class="lead text-center">
        <a class="btn btn-primary btn-lg" href="{{url('game')}}" role="button">Add Game</a>
        <a class="btn btn-primary btn-lg" href="{{url('gameshow')}}" role="button">show Game</a>
        <a class="btn btn-primary btn-lg" href="{{url('gametiminginsert')}}" role="button"> Add Game Timing</a>
        <a class="btn btn-primary btn-lg" href="{{url('score')}}" role="button"> Score Insert </a>
        <a class="btn btn-primary btn-lg" href="{{url('gameresultanalysis')}}" role="button"> Result Analysis </a>
    </p>
</div>

<div class="container">

    <h3 class="text-center text-primary" >Game Contest Management system</h3>
    <h3 class="text-center "> Created By : Faisal Ahmed  </h3>

</div>


</body>
</html>
