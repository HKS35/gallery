<?php 
include('connection.php');
if(isset($_POST['submit'])){
$album = $_POST['album'];
$sql = "insert into album (album)values('$album')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
	header('location:add_photo.php');
}else{
	echo "plese upload ur data carefully again";
}
}