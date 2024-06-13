<?php 

 $stu_id = $_POST['sid'];
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_course = $_POST['scourse'];
 $stu_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection failed");
$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', scourse = '{$stu_course}',sphone = '{$stu_phone}'
WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull.");
header("location: http://localhost/project3/index.php");



?>