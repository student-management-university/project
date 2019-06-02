<?php
	 include("../class/school.php");
$name=$_POST["txt-name"];
$gender=$_POST["txt-gender"];
$dob=$_POST["date"];
$add=$_POST["txt-address"];
$phone=$_POST["txt-phone"];
	$student=new Student();
	$student->get_field_name("student");
	$student->insert_data(array('null',$name,$gender,$dob,$add,$phone));
?>