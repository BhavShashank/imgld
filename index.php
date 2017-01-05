<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Imgld</title>
</head>
<body>
	<!--Navbar Start-->
	<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">imgld</a>
			</div>
		</div>
	</div>
	<!--Navbar End-->
	<!--Conatiner Start-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form class="well" action="upload.php" method="post" enctype="multipart/form-data">
					<div class="form-group text-center">
						<label for="file">Select a file to Upload</label>
						<input type="file" name="file" class="col-lg-offset-5">
						<p class="help-block">Only jpeg, jpg, png and gif file with max 3mb of size allowed</p>
						<p class="help-block"><a href="view.php">View all uploaded images</a></p>
						<input type="submit" class="btn btn-lg btn-primary" value="Upload">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Conatiner End-->
</body>
</html>