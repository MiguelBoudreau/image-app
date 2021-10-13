<?php 
//START OR RESUME THE ACTVIE SESSION
session_start();
require('config.php'); 

//logout logic if they checked the logout link
if( isset( $_GET['action'] ) AND $_GET['action'] == 'logout' ){
    //invalidate all cookies
    setcookie('is_logged_in', 0, time() - 9999 );

    $_SESSION = array();

	//https://www.php.net/manual/en/function.session-destroy
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

    //destroy the session id

    session_destroy(  );
}



//process the form if it was submitted
if( isset($_POST['username'] ) AND isset($_POST['password'] ) ){
	// extract he user-submitted value
	$username = $_POST['username'];
	$password = $_POST['password'];

	//check to see if these values match the correct combo
	if( $username == CORRECT_USER AND $password == CORRECT_PASSWORD ){
		//let them in! store a cookie the remember them and send them to their secret page
		// DANGER: This cookie name is terrible and needs to be more obscure.
		setcookie( 'is_logged_in', 1, time() + 60 * 60 * 24 * 7 );
		$_SESSION['is_logged_in'] = 1;

		//redirect to the user profile
		header('location:profile.php');
	}else{
		//error state
		$feedback = 'Incorrect Username and password combo. Try again.';
		$feedback_class = 'error';
	}

} // end of the processor
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In to your Account</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" />
	<style type="text/css">
		.login{
			max-width:30em;
		}

		.error{
			background-color: pink;
			padding: .5em;
			margin: 1em 0;
		}
	</style>
</head>
<body>
	
	<div class="container login">
		<h1>Log in</h1>

		<?php //show the feedback if it exist
		if( isset( $feedback ) ){
			echo "<div class='$feedback_class'>$feedback</div>";
		}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<label>Username</label>
			<input type="text" name="username">

			<label>Password</label>
			<input type="password" name="password">

			<input type="submit" value="Log In">
		</form>
	</div>


	<?php include('debug-output.php'); ?>

</body>
</html>