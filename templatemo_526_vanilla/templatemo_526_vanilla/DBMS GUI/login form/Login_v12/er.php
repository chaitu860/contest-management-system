<?php

$conn=mysqli_connect("localhost","root","","contest");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "hello";
}
echo $_POST["orgname"];
if (!empty($_POST['submit'])){
$part_id = $_POST['orgname'];
    echo "re";
          $cont_id = $_POST['conid'];
     $score=$_POST["phono"];
     
	 $sql = "INSERT INTO score_1 (part_id,contest_id,score)
	 VALUES ('$part_id','$cont_id','$score')";
mysqli_query($conn,$sql);
}

echo 0;

?>