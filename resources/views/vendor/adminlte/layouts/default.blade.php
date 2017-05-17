<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel CRUD</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap 4 alpha CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">


		
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>


<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

<style>
       

 body {
  padding-top: 50px;
}
legend a {
  color: inherit;
}
legend.legendStyle {
padding-left: 5px;
padding-right: 5px;
}
fieldset.fsStyle {
font-family: Verdana, Arial, sans-serif;
font-size: small;
font-weight: normal;
border: 1px solid #999999;
padding: 4px;
margin: 5px;
}

legend.legendStyle {
font-size: 90%;
color: #888888;
background-color: transparent;
font-weight: bold;
}

legend {
width: auto;
border-bottom: 0px;
}


th {
 color: gray;
font-size: 90%;
}

</style>
</head>
<body>
 
<div class="container">
    @yield('content')
</div>
 
</body>
</html>