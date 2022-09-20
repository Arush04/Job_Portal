<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href='css/style.css' rel='stylesheet'>
</head>
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

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Company Name</th>
            <th scope="col">CTC</th>
            <th scope="col">Position</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>TCS</td>
            <td>8</td>
            <td>SE</td>
        </tr>
    </tbody>
</table>
</body>
</html>