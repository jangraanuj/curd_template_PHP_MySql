<?php 
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_course = $_POST['class'];
echo $stu_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection failed");
$sql = "INSERT INTO student (sname, saddress, scourse,sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_course}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull.");
header("location: http://localhost/project3/index.php");
?>