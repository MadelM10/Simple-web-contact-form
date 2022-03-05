<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php
			echo "Welcome ".$_POST['username']; 
			?>
	</title>
</head>
<body>
	<?php 
		$username=$_POST['username']; 
		$email=$_POST['email']; 
		$issue = filter_input(INPUT_POST, 'issue', FILTER_SANITIZE_STRING);
		$comment=$_POST['comment']; 

	?>

	<?php 
		if($issue){
			echo "Username is ".$username."<br>Email is ".$email."<br>User's Issue is ".$issue."<br>User's Comment is ".strtoupper($comment);}
		else { echo "You did not select any color";}	
	?>
</body>
</html>