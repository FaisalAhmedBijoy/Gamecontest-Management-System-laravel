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
        background-image: url('https://live.staticflickr.com/3199/2800816794_bb5afd25b8.jpg');


    }
</style>
<body>

<pre>




</pre>
<h1 class="text-center text-light" >Game</h1>
<div class="container">
    <form method="get" action="{{url('gametiminginsert')}}">

        <div class="form-group">
            <label for="gamename">Game Date</label>
            <input type="date"  name="gamedate" class="form-control" id="gamedate" placeholder="Enter Game Date">
        </div>

        <div class="form-group">
            <label for="segment">Segment </label>
            <input type="text" name="segment" class="form-control" id="segment" placeholder="Enter Segment Number">
        </div>





        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>