<!DOCTYPE html>
<html lang = "de">
	<head>
		<title>test side</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		

		<div id="container">
		<h1>Go PHP </h1>
		<form >
			<p>A test</p> <input></input>
		</form>

		<ol>
			<li>first</li>
			<li>second</li>
		</ol>
			<div id="header">
				<p>it is a header</p>
			</div>
			<div id="menue">
				<ul>
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
				</ul>
			</div>
			<div id="content">
				<div class="test">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
				<button class="btn btn-primary">Button mit Bootstrap</button>
			</div>
			<div id="banner">
				<p>Hir könnte Ihre Werbung stehen</p>
			</div>
			<div id="impressum">
				<h1><center>impressive impressum</center></h1>
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
