<?php
	$page_title="signup"; 
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
            <h1 class="bottom-line">Create a New Account</h1>
            <p class="text-center"><em>Signup now for our new updates and get regular offers and stuff</em></p>
            <div class="row">
                <div class="col-md-6">
                    <h2>Sign up</h2>
                    <form action = 'profile.php' method = 'GET' >
						Email:	<input type = 'text' size='90' name =  'search' >
						Name:	<input type = 'text' size='90' name =  'search' >
						Password:<input type = 'password' size='90' name =  'search' >
						<input type = 'submit' name = 'submit' value = 'Sign Up' >
				
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
