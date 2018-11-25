
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WAD-H UCP Assignment 2</title>
	<meta charset="UTF-8">
	<meta name="description" content="UCP Section H Assignment 2">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="M Talha">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/main.js"></script> 
</head>
<body>

<header class="jumbotron text-center">
	<div class="container">
		<div class="row">
			<h1>WAD-H UCP Assignment 2</h1>
		</div>
	</div>
</header>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container">
		<div class="row">
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link active" href="#">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
			  </li>    
			</ul>
			</div>
		</div>
	</div>
	
</nav>

<div class="container main">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Assignment</h2>
    </div>
    <div class="col-sm-8">
		<h2>What is Lorem Ipsum?</h2>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 		
		</p>
		<form name="RegForm" action="" onsubmit="return formvalidatefunc()" method="post">  
			<div class="form-group row"> 
				<label class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" size=65 name="Name" class="form-control">
				</div>
			</div>					
			<div class="form-group row"> 
				<label class="col-sm-2 col-form-label">E-mail</label>
				<div class="col-sm-10">
					<input type="text" size=65 name="EMail" class="form-control">
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="password" size=65 name="Password" class="form-control">
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-sm-2 col-form-label">Address</label>
				<div class="col-sm-10">
					<input type="text" size=65 name="Address" class="form-control">
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-sm-2 col-form-label">Telephone</label>
				<div class="col-sm-10">
					<input type="text" size=65 name="Telephone" class="form-control">
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-sm-2 col-form-label">Course</label>
				<div class="col-sm-10">
					<select class="form-control" name="Subject"> 
					<option value="">None</option>
					<option value="bscs">BSCS</option> 
					<option value="bba">BBA</option> 
					<option value="bca">BCA</option> 
					</select>
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-sm-2 col-form-label">Comments</label>
				<div class="col-sm-10">
					<textarea cols="55" name="Comment" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group row">				
				<div class="col-sm-2">
					<button type="submit" name="Submit" class="btn btn-primary">Send</button>
				</div>
				<div class="col-sm-2">
					<button type="reset" name="Reset" class="btn btn-secondary">Reset</button>
				</div>
			</div>	
			
			</p>          
		</form> 
    </div>
  </div>
</div>

<footer class="jumbotron text-center">
	<p>Copyright 2018 M Talha</p>
</footer>
</body>
</html>
