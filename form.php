<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Contact Form</title>
</head>
<body>
	<form action="formData.php" method="post">
		<h1>Web Contact Form</h1>
		Username: <input type="text" name="username" required><hr>
		E-mail:   <input type="email" name="email" required><hr>
		Issue:    <select name="issue">
				  	<option>Query</option>
					<option>Feedback</option>
					<option>Complaint</option>
					<option>Other</option>
				  </select><hr>
		Comment:  <textarea name="comment" required></textarea><hr>
		<input type="submit" name="submit" value="Create">
	</form>
</body>
</html>