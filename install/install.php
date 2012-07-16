<!DOCTYPE html>
<html>
<head>
<style>
	body { 
		margin: 0;
		padding: 0;
		font-family: "Lucinda Sans Unicode", "Trebuchet MS", sans-serif;
	}
	
	header {
		display: block;
		width: 100%;
		height: 80px;
	}
	
	#headfootcont {
		width: 960px;
		margin-left: auto;
		margin-right: auto;
	}
	
	#main {
		width: 960px;
		height: auto;
		margin: 10px auto;
	}
	
	form input {
		margin-top: 10px;
	}
	
	footer {
		width: 100%;
		height: 40px;
		display: block;
	}
</style>
<title>phpVFAS Install</title>
</head>
<body>
	<header>
		<div id="headfootcont">
			<img src="#" alt="phpVFAS" />
		</div>
	</header>
	<div id="main">
		<h1>Install</h1>
		<form action="installsql.php">
			<input placeholder="Database Name" /><br />
			<input placeholder="Database User" /><br />
			<input placeholder="Database Password" /><br />
			<input type="submit" value="Check Database Connection" />
			<?php
				if (submit == "YES") {
					echo "";
				} else {
					echo "";
				}
				
			?>
			<h2>Airline Information</h2>
			<input placeholder="Airline Name" /><br />
			<input placeholder="Airline ICAO" /><br />
			<input placeholder="Your Name" /><br />
			<input placeholder="Your Email" /><br />
			<input type="submit" value="Continue" />
		</form>
	</div>
	<footer>
		<div id="headfootcont">
			<p align="center">Powered by phpVFAS. Support <a href="https://github.com/Talisman57/phpVFAS/issues">Here</a>.</p>
		</div>
	</footer>
</body>
</html>