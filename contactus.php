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
    filter: brightness(50%);
    background-image: cover;
    background-size: cover;
    height: 90%;
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
    color: blueviolet;
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
                    <a href="#" class="nav-item nav-link">Job List</a>
                    <a href="Employers.php" class="nav-item nav-link">Employers</a>
                    <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="hero-image" style="background-image:url('images/hero-header/dash.jpg');">
	<div class="hero-text">
		<h1><b>Good Jobs Pvt Limited</b></h1>
		<p><b>Address:</b> ABC Junction, New Delhi, India</p>
        <p><b>Email:</b> goodjobs123@gmail.com</p>
        <p><b>Phone:</b> +91 123456789</p>
	</div>
  
</body>
</html>