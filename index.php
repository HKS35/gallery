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
					<form class="mt-5" enctype="multipart/form-data" method="post" action="registration_action.php">
						<div class="row">
						    <div class="mb-3 col-md-8">
						    	<div class="form-group">
						            <label>Full Name</label>
						            <input type="text" name="fname" class="form-control"placeholder="Enter Your Full Name ..."required>
						        </div>
						    </div>
						   
						    <div class="mb-3 col-md-8">
						    	<div class="form-group">
						            <label>Mobile No</label>
						            <input type="text" name="mob_no" class="form-control"placeholder="Enter Your Mobile No..."required>
						        </div>
						    </div>
						    <div class="mb-3 col-md-8">
						     	<div class="form-group">
						            <label>Email</label>
						            <input type="text" name="email" class="form-control"placeholder="Enter Your Email..."required>
						        </div>    
						    </div>
						     <div class="mb-3 col-md-8">
						     	<div class="form-group">
						            <label>Password</label>
						            <input type="text" name="password" class="form-control"placeholder="Create Your Password..."required>
						        </div>    
						    </div>
						    <div class="mb-3 col-md-8">
					            <div class="form-group">
							        <label>Full Address: </label>
							        <textarea name="address" class="form-control" rows="4"  id="present_address"placeholder="Enter Your full address..."required></textarea>
						        </div>
					        </div>
					        <div class="mb-3 col-md-8">
					        	<div class="form-group">
							        <label>upload Your photo: </label>
							        <input type="file" name="photo"  id="photo">
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