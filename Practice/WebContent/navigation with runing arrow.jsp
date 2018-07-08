<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>navigation with runing arrow</title>
    <link href="Navigation with running arrow.css" rel="stylesheet" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <header>
        Overall-tech
    </header>
    <nav>
        <ul>
            <li><a href="{{url('/home/Kaycube/NewYork')}}" >Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Feedback</a></li>
            <div id="runner"></div>
        </ul>
    </nav>
</div>
</body>
</html>