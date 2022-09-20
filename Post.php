<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href='css/style.css' rel='stylesheet'>
</head>
    <style>
       
       html{
   background:url(https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260) no-repeat;
   background-size: cover;
   height:100%;
   background-color: #000;
}
* {
   box-sizing:border-box;
   -webkit-box-sizing:border-box;
   -moz-box-sizing:border-box;
   -webkit-font-smoothing:antialiased;
   -moz-font-smoothing:antialiased;
   -o-font-smoothing:antialiased;
   text-rendering:optimizeLegibility;
}
body {
   color: #C0C0C0;
   font-family: Arial, san-serif;
}


/* Contact Form Styles */
h1 {
   margin: 10px 0 0 0;
}
h4{
   margin: 0 0 20px 0;
}
#contact-form {
   background-color:rgba(72,72,72,0.9);
   padding: 10px 20px 30px 20px;
   max-width:100%;
   float: left;
   left: 50%;
   position: absolute;
   margin-top:30px;
   margin-left: -260px;
   border-radius:7px;
   -webkit-border-radius:7px;
   -moz-border-radius:7px;
}
#contact-form input,   
#contact-form select,   
#contact-form textarea,   
#contact-form label { 
   font-size: 15px;  
   margin-bottom: 2px;
   font-family: Arial, san-serif;
} 
#contact-form input,   
#contact-form select,   
#contact-form textarea { 
   width:100%;
   background: #fff;
   border: 0; 
   -moz-border-radius: 4px;  
   -webkit-border-radius: 4px;  
   border-radius: 4px;
   margin-bottom: 25px;  
   padding: 5px;  
}  
#contact-form input:focus,   
#contact-form select:focus,   
#contact-form textarea:focus {  
   background-color: #E5E6E7; 
}  
#contact-form textarea {
   width:100%;
   height: 150px;
}
#contact-form button[type="submit"] {
   cursor:pointer;
   width:100%;
   border:none;
   background:#991D57;
   background-image:linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   background-image:-moz-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   background-image:-webkit-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   color:#FFF;
   margin:0 0 5px;
   padding:10px;
   border-radius:5px;
}
#contact-form button[type="submit"]:hover {
   background-image:linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   background-image:-moz-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   background-image:-webkit-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   -webkit-transition:background 0.3s ease-in-out;
   -moz-transition:background 0.3s ease-in-out;
   transition:background-color 0.3s ease-in-out;
}
#contact-form button[type="submit"]:active {
   box-shadow:inset 0 1px 3px rgba(0,0,0,0.5);
}
input:required, textarea:required {  
   box-shadow: none;
   -moz-box-shadow: none;  
   -webkit-box-shadow: none;  
   -o-box-shadow: none;  
} 
#contact-form .required {  
   font-weight:bold;  
   color: #E5E6E7;      
}

#failure, #success {
   color: #6EA070; 
   display:none;  
}

@media only screen and (max-width: 580px) {
   #contact-form{
      left: 3%;
      margin-right: 3%;
      width: 88%;
      margin-left: 0;
      padding-left: 3%;
      padding-right: 3%;
   }
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

<div id="contact-form">
	<div>
		<h1>Post Your Job here!</h1> 
	</div>
		<p id="failure">Oopsie...Job not posted.</p>  
		<p id="success">Your Job was posted successfully. Thank you!</p>

		   <form method="POST" action="connect.php">
			<div>
		      <label for="name">
		      	<span class="required">Company Name: *</span> 
		      	<input type="text" id="name" name="cname" value="" placeholder="Company Name" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="ctc">
		      	<span class="required">CTC: *</span>
		      	<input type="int" id="ctc" name="ctc" value="" placeholder="CTC" tabindex="2" required="required" />
		      </label>  
			</div>
			<div>
		      <label for="position">
		      	<span class="required">Posistion: *</span>
		      	<input type="text" id="position" name="position" value="" placeholder="Position" tabindex="2" required="required" />
		      </label>  
			</div>
			<div>		          
		      <label for="Job description">
		      	<span class="required">Job description: *</span> 
		      	<textarea id="message" name="description" placeholder="description" tabindex="5" required="required"></textarea> 
		      </label>  
			</div>
			<div>		           
		      <button name="post" type="submit" id="submit" >Post</button> 
			</div>
		   </form>

	</div>

</body>
</html>