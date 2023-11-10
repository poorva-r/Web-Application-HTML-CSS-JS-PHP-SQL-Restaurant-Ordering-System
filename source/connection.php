<?php
$servername="localhost";
$username="root";
$password="123";
$dbname="project"; //form is database name
$conn=mysqli_connect($servername,$username,$password,$dbname);
//if($conn->connect_error){
//die("unable connect".$conn->connect_error);
//}
// echo "database connection is successfully";
if(isset($_POST['submit'])){
if(!empty($_POST['name']) && 
!empty($_POST['number'])){
$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$query="insert into Customer_details(name, number, address)
values('$name','$number', '$address')";
$run=mysqli_query($conn,$query) or
die(mysqli_error());
if($run){
   // echo "details entered successfully";

header('Location: http://localhost/Celebrations%20Project/orderplaced.php');
}
else{
echo "form is not submitted";
}
}
else{
echo "all fields required";
}
}
?>