<?php
	session_start();
	
	$db = mysqli_connect('localhost', 'root', '', 'cloud');
	
	if (isset($_POST['submit']))
	{
		$email =$_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		if($password == $password2)
		{
			$password = md5($password);
			$sql =("INSERT INTO users(email, username, password) VALUES('$email', '$username', '$password')");
			mysqli_query($db, $sql);
			$_SESSION['message'] = "you are now logged in";
			$_SESSION['username'] = $username;
			header("location: index.php");
			
		}
		else
		{
			$_SESSION['message'] = "passwords do not match";
		}
	}
	
?>
	
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
                    <form method="post" action="signup.php" >
						Email:	<input type = 'text' size='90' name =  'email' >
						Name:	<input type = 'text' size='90' name =  'username' >
						Password:<input type = 'password' size='90' name =  'password' >
						Confirm password:<input type = 'password' size='90' name =  'password2' >
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
