<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>project</title>
	<!-- bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-4">
				<div class="signup-form">
					<form class="mt-5"  method="post" action="users_dashboard_action.php">
						<div class="row">
						    <div class="mb-3 col-md-8">
						    	<div class="form-group">
						            <label>Create Your Photo Album</label>
						            <input type="text" name="album" class="form-control"placeholder="Enter Your album Name ..."required>
						        </div>
						    </div>
						   
						  
					        <div class="mb-3 col-md-8 text-center">
			                    <div class="form-group">
					                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-success btn-lg mt-4" autocomplete="off">SUBMIT</button>
				                </div>
			                </div>    	
						</div>
					</form>
				</div>
			</div>
	    </div>
	</div>
	<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>