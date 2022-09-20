<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Good Jobs</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href='css/style.css' rel='stylesheet'>

	
</head>
	<style>
        .hero-image {
    filter: brightness(70%);
    background-image: cover;
    background-size: cover;
    height: 50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 23px;
    transform: translate(-50%, -50%);
    color: whitesmoke;
}

.flex-container {
    display: flex;
}

.flex-child1 {
    flex: 1;
    border: 2px solid white;
    margin-right: 20px;
    display: -webkit-flex;
    -webkit-flex-wrap: wrap;
    display: flex;
    flex-wrap: wrap;
}

.flex-child {
    flex: 1;
    border: 2px solid white;
    margin-right: 20px;
    display: -webkit-flex;
    -webkit-flex-wrap: wrap;
    display: flex;
    flex-wrap: wrap;
}

.flex-child img {
  max-width:50%;
  max-height: 50%;
}

.flex-child1 img {
  max-width:50%;
  max-height: 50%;
}
  
	</style>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="images/logo.jpg" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="Post.php" class="nav-item nav-link">Job Post</a>
                <a href="Joblist.php" class="nav-item nav-link">Job List</a>
                <a href="Employers.php" class="nav-item nav-link">Employers</a>
                <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="hero-image" style="background-image:url('images/employers.jpg');">
	<div class="hero-text">
		<h1><b>Our Employers</b></h1>
        <p>Top Companies</p>
	</div>
</div>
<br>
<br>
<div class="flex-container">

  <div class="flex-child magenta">
    <img src="images\companies\microsoft.png" alt="microsoft">
    <p><b>Microsoft</b></p>

  </div>
  
  <div class="flex-child green">
    <img src="images\companies\facebook.png" alt="facebook">
    <p><b>Facebook</b></p>
  </div>

  <div class="flex-child green">
    <img src="images\companies\apple.png" alt="apple">
    <p><b>Apple</b></p>
  </div>
  
</div>
<br>
<div class="flex-container">

  <div class="flex-child1 magenta">
    <img src="images\companies\telegram.png" alt="telegram">
    <p><b>Telegram</b></p>
  </div>
  
  <div class="flex-child1 green">
    <img src="images\companies\paytm.png" alt="paytm">
    <p><b>Paytm</b></p>
  </div>

  <div class="flex-child1 green">
    <img src="images\companies\meta.png" alt="meta">
    <p><b>Meta</b></p>
  </div>
  
</div>
    
</body>
</html>