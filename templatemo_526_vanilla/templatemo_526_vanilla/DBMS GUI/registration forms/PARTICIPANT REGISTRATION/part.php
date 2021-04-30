<?php

$conn=mysqli_connect("localhost","root","","contest");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "hello";
}
echo $_POST["first_name"];
if (!empty($_POST['save'])){
$part_id = $_POST['first_name'];
     $part_name = $_POST['last_name'];
          $cont_id = $_POST['contest_id'];
     $college_id=$_POST['college_id'];
     $dept_id=$_POST['dept_id'];
     $age=$_POST["phone"];
     $dob=$_POST["birthday"];
     $grad_year=$_POST["grad_year"];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO participant (part_id,part_name,cont_id,college_id,dept_id,age,dob,grad_year,email)
	 VALUES ('$part_id','$part_name','$cont_id','$college_id','$dept_id',' $age','$dob',' $grad_year','$email')";
mysqli_query($conn,$sql);
}

echo 0;

?>