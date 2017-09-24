<?php
	$page_title="Home"; 
	include("includes/header.php");
	include 'includes/nav.php';
?>

	<div class="whatamidoing">
	<body class="body">
	<!-- start code here -->
	<div class="willtolive">
		
			
			<h1> Enter Your Choice </h1>
			<div class="notfound">
			<form action = 'result.php' method = 'GET' >
			<input type = 'text' size='90' name =  'search' >
			<input type = 'submit' name = 'submit' value = 'Search Up Restaurant' >
			
			</form>
		</div>

	</div>

<?php
	include 'includes/endpage.php';
?>
</div>
