<!DOCTYPE html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>File Upload</title>
	<link rel="stylesheet" type="text/css" href="plugins/css/bootstrap.min.css" />
	<script type="text/javascript" src="plugins/js/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/js/bootstrap.min.js"></script>
</head>

	<body>
	<div class="container">
		<div class="panel panel-primary" style="margin-top: 200px"> 
			<div class="panel-heading">
				Upload File
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data" id="target" action="upload_file.php">
					<div class="form-group">
							<label for="file"><span>Filename:</span></label>
							<input type="file" name="file" id="file" class="btn btn-info"/> 
						<br />
						<input type="submit" name="submit" value="Submit" class="btn btn-info"/>
					</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>