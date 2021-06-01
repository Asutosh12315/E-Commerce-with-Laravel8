<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce | Project</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- bootstrap cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<style>

.custom-login{
height:500px;
width:100%;
padding-top: 100px;

}

.custom-product{
    
 height:600px;
   
}
.carousel-caption{

    background-color: deepskyblue;
}
.custom-product img{

    
    height: 400px;
}
.mynav{

    background-color:blue;
    padding:20px 0px 20px 0px;
}
.mynav a{

    color:white;
    font-weight:bolder;
    font-size:1.7rem;
}
.mynav button{

    background-color:#FFCC00
}
.trending-wrapper{
    padding: 20px;
    margin:20px;
    
}
.trending-item{
 padding: 5px;
 float:left; 
 width:25%;

}
.details-img{

    
    
    
    /* height: 200px; */
}
</style>
</head>
<body>
    
@include('Header')

@yield('content')


@include('Footer')
</body>
</html>