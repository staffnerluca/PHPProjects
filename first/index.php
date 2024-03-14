<!DOCTYPE html>
<html lang = "de">
	<head>
		<title>test side</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--link rel="stylesheet" href="style.css">-->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		
		<div id="container">
			<div class="row bg-danger">
				<div id="header">
					<br>
					<h1>it is a header</h1>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 bg-warning">
					<div id="menue">
						<ul>
							<li>Test</li>
							<li>Test</li>
							<li>Test</li>
							<li>Test</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 bg-info">
				<div id="content" class="container-sm bs-secondary-color">
					<div class="test">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
					<button class="btn btn-primary">Button mit Bootstrap</button>
					<form>
						<div class="mb-3">
							<input type="file">Choose File</input>
							<input type="color">Choose Color</input>
							<label for="userName" class="form-label">Username</label>
							<input class="form-control" id="userName" aria-describedby="usernameHelp">
							<div id="usernameHelp" class="form-text">Enter your username here.</div>
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
						<label for="exampleDataList" class="form-label">Datalist example</label>
						<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
						<datalist id="datalistOptions">
						<option value="San Francisco">
						<option value="New York">
						<option value="Seattle">
						<option value="Los Angeles">
						<option value="Chicago">
						</datalist>
						<br>
					</div>
					</div>
				<div class="col-md-2 bg-success">
				<div id="banner">
					<p>Hir könnte Ihre Werbung stehen</p>
				</div>
				</div>
				</div>
				<div class="row bg-primary">
				<div id="impressum">
					<h1><center>impressive impressum</center></h1>
				</div>
				</div>
		</div>
	</body>
	</html>
<?php

//phpinfo();
	$myVar = "dumm";
	$wasIst = "PHP ist ";
	echo "{$wasIst}{$myVar}";
	echo "<br>";
	$first = 1;
	$second = 2;
	if($first != $second){
		echo "ungleich ";
	}
	$counter = 0;
	while($counter < 10){
		echo $counter;
		$counter += 1;
	}
	echo "<br>";
	for($i = 0; $i < 10; $i++){
		echo $i;
	}

	function counting_sort(){

	}
?>
