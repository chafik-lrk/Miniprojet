<?php

 $stu_name = $_POST['name_art'];
// $stu_address = $_POST['saddress'];
// $stu_class = $_POST['class'];
//  $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","get*out*the*car++","crud") or die("Connection Failed");

$sql = "INSERT INTO type_art(art) VALUES ('{$stu_name}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/adminInterface.php");

mysqli_close($conn);

?>
