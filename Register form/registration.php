<?php

    $username = $_POST["student_name"];
    $enroll_no = $_POST["reg_no"];
    
    $data = array($username,$enroll_no);
    
    $read = fopen("student-detail.csv","a") or die("unable to open");
    fputcsv($read,$data);
    fclose($read);
    
?>
<html> 
<head>
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/fav-icon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- My Css -->
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body style="background: url(background.gif) no-repeat center center fixed;">
        <header id="nav-header">
	    	<nav class="navbar navbar-expand-lg">
	  				<div class="container">
  						<h class="navbar-brand">
                            Computer and Communication Engineering       
                        </h>
					</div>    					
			</nav>
    	</header>
        <main>
        <div class="card" style="width: 18rem;">
						<div class="card-body">
						<div>
						  <h5 id="register_title" class="card-title">Registration Completed</h5>
                    </div><br/>
					
			<a href="index.html" id="detail-button"><button type="submit" style="margin-top : 10%;" class="btn btn-primary">Home Page</button></a>
            <a href="details.html" id="detail-button"><button type="submit" class="btn btn-success" style="margin-top: 10%;" >Student's details</button></a>

        </div>	
        
        <!-- JavaScript Code -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Separate -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        </main>
</body>