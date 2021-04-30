<?php

$conn=mysqli_connect("localhost","root","","contest");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "hello";
}
echo $_POST["orgid"];
if (!empty($_POST['submit'])){
$part_id = $_POST['orgid'];
     $part_name = $_POST['orgname'];
          $cont_id = $_POST['conid'];
     $phoneno=$_POST["phono"];
     
	 $sql = "INSERT INTO organiser (organiser_id,organiser_name,cont_id,phn_no)
	 VALUES ('$part_id','$part_name','$cont_id','$phoneno')";
mysqli_query($conn,$sql);
}

echo 0;

?>