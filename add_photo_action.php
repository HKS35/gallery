<?php 
include('connection.php');
if(isset($_POST['submit'])){
$img = $_FILES['photo'];
$img_name = $img['name'];
$tmp_name = $img['tmp_name'];
$img_path = "img/".$img_name;
$success = move_uploaded_file($tmp_name,'img/'.$img_name);
$fkey = $_POST['albumid'];
$sql = "insert into gallery (photo,fkey)values('$img_path','$fkey')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
	header('location:photogallery.php');
}else{
	echo "plese upload ur data carefully again";
}
}
?>