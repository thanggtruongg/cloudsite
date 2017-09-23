<?php
	$page_title="login"; 
	include("includes/header.php");
?>
<?php
	include 'includes/nav.php';
?>
<div class="page-title-img">
        <img class="img-full">
    </div>
    
    <section>
        <div class="container">
            <h1 class="bottom-line">Login</h1>
            <p class="text-center"><em>Login to receive coupons and explore more foods near you</em></p>
            <div class="row">
                <div class="col-md-6">
                    <h2>Login</h2>
                    <form action = 'profile.php' method = 'GET' >
						Email:	<input type = 'text' size='90' name =  'search' >
						Password:<input type = 'text' size='90' name =  'search' >
						<input type = 'submit' name = 'submit' value = 'Sign in' >
				
					</form>
                </div>
                <div class="col-md-6">
                	<div class="margin-20"></div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="assets/images/about/steak.png"></img>
                    </div>
                </div>
            </div>
<?php
	include("includes/footer.php");
?>
			
<?php
	include("includes/endpage.php");
?>
