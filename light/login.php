<?php
	session_start();
	if (isset($_POST['submit']))
	{
		require 'connect.php';
		$email = $_POST['email'];
		$password = $_POST['password'];
		$result = mysqli_query($con, 'select * from users where email="'.$email.'" and password="'.$password.'"');
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['email'] = $email;
			header('Location: index.php');
		}
		else
		{
			echo "<script type='text/javascript'>alert('Invalid Email');</script>";
			header('Location: login.php');
		}
	}
?>
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
                    <form  method = 'post' >
						Email:	<input type = 'text' size='90' name =  'email' >
						Password:<input type = 'password' size='90' name =  'password' >
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
