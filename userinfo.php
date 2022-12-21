<?php

$con = mysqli_connect('localhost','root');

// if($con){
//     echo "Connection successful";
// } else {
//     echo "Connection failed";
// }

mysqli_select_db($con, 'contactusdata');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (name, email, number, comment) 
values ('$name', '$email', '$number', '$comment')";

mysqli_query($con, $query);

header('location:index.php');

?>