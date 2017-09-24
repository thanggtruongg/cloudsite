<?php 
	$page_title="Result";
	include('includes/header.php');
	include('includes/nav.php');
	/*
	$curl = curl_init('https://developers.zomato.com/api/v2.1/locations?query=' . $_GET['search']. '&apikey=d73408e13daf50b5cd7be8784edb52c2');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$resp = curl_exec($curl);
	*/
	//header("Content-Type:application/json");
	if(!empty($_GET['search']))
	{

		$zomato_url = 'https://developers.zomato.com/api/v2.1/locations?query=' . urlencode($_GET['search']) . '&apikey=d73408e13daf50b5cd7be8784edb52c2';
		$zomato_json = file_get_contents($zomato_url);
		$zomato_array = json_decode($zomato_json, true);
		foreach ($zomato_array['location_suggestions'] as $detail ) 
		{
			echo detail['title']['city_id'];
		}

		
	}


?> 


	<div class="whatamidoing">
	<body class="body">
	<!-- start code here -->

			<div class="notfound">
			<h1> Enter Your Choice </h1>
			<form action = '' method = 'GET' >
			<input type = 'text' size='90' name =  'search' >
			<input type = 'submit' name = 'submit' value = 'Search Up Restaurant' >
			</form>
			<?php
				echo $zomato_array;
			?>
			</form>
	

	</div>