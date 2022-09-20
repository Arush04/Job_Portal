<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='css/style.css' rel='stylesheet'>
</head>
    <style>
    body, html {
  margin: 0;
  background-color: #E35160;
}

    .content {
  position: absolute;
  background-color: #ecf0f1;
  width: 200px;
  height: 250px;
  top: 50px;
}

.tooltip1 {
  left: 25%;
}

.tooltip2 {
  left: 50%;
}

.tooltip3 {
  left: 75%;
}

.tooltip {
  top: 50%;
  width: 23%;
  height: 350px;
  border-radius: 15px;
  background-color: #fff;
  position: absolute;
  box-shadow: 3px 3px 5px rgba(0,0,0,0.5);
  transform: translate(-50%, -50%);
}

.cover {
  width: 100%;
  height: 100%;
  border-radius: 15px;
  background-color: #fff;
  position: absolute;
}

.arrow, .shadow {
  width: 25px;
  height: 25px;
  position: absolute;
  transform: rotate(-45deg);
  top: 100%;
  left: 50%;
  margin-left: -12.5px;
  margin-top: -14px;
}

.arrow {
  background-color: #fff;
  box-shadow: 0px 3px 5px rgba(0,0,0,0.5);
}
    
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

    </style>
<body>
    <div class="navbar">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
    </div>

  <div class="tooltip tooltip1">
    <span class="arrow"></span>
    <div class="content"></div>
    <div class="cover"></div>
    <div class="contect">
        <h1>Jobs applied</h1>
    </div>
  </div>
  <div class="tooltip tooltip2">
    <span class="arrow"></span>
    <div class="content"></div>
    <div class="cover"></div>
  </div>
  <div class="tooltip tooltip3">
    <span class="arrow"></span>
    <div class="content"></div>
    <div class="cover"></div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>