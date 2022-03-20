<?php 
include('connection.php');
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$mob_no =$_POST['mob_no'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$img = $_FILES['photo'];
$img_name = $img['name'];
$tmp_name = $img['tmp_name'];
$img_path = "img/".$img_name;
$success = move_uploaded_file($tmp_name,'img/'.$img_name);
$sql = "insert into registration (fullname,mobileno,email,password,address,photo)values('$fname','$mob_no','$email','$password','$address','$img_path')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
	header('location:login.php');
}else{
	echo "plese upload ur data carefully again";
}
}
?>