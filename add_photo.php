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
					<form class="mt-5" enctype="multipart/form-data" method="post" action="add_photo_action.php">
						<div class="row">
						    <div class="mb-3 col-md-8">
						    	<div class="form-group">
						           <label>Choose Album</label>
                                   <select id="AlbumId" name="albumid" class="form-control">
                                   	<option disabled selected=""> Select Your album</option>
                                   	<?php
                                        include('connection.php');
                                        $sql = "select * from album";
                                        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                        while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                   	<option value="<?php echo $row['id']; ?>"><?php echo $row['album']; ?></option>
                                   	<?php
                                   }
                                   	?>
                                   </select>
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