<!DOCTYPE html>
<html>
<head>
	<title>InputData</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container"> 
		<div class="login-box">
		<div class="row">
			<div class="col-md-6" login-left>
				<h2> Enter your details!</h2>                   
				<form action="save.php" method="post">
					<div class="form-group">
						<label> Enter your username: </label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label> Enter your USN: </label>
						<input type="text" name="usn" class="form-control" required>
					</div>
					<div class="form-group">
						<label> Enter your current semester: </label>
						<input type="text" name="semester" class="form-control" required>
					</div>
					<div class="form-group">
						<label> Enter the number of subjects: </label>
						<input type="text" name="nos" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary"> Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</body>
</html>
