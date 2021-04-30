<html>

<head>

"ORGANISER TABLE"

<style>



h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM organiser";
$result = $conn->query($sql);
 

echo "<table border='1'>
<div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <thead>
<tr>

<th>Organiser Id</th>

<th>Organiser name</th>

<th>CONTEST ID</th>

<th>phone number</th>

</tr>

</thead>
</div>
</table>
";

 
echo "<div class='tbl-content'>";
echo"<table cellpadding='0' cellspacing='0' border='0'>";
 echo" <tbody>";
    
while($row =$result->fetch_assoc())

  {

  echo "<tr>";

  echo "<td>" . $row['organiser_id'] . "</td>";

  echo "<td>" . $row['organiser_name'] . "</td>";

  echo "<td>" . $row['cont_id'] . "</td>";

  echo "<td>" . $row['phn_no'] . "</td>";

  echo "</tr>";

  }
echo "</tbody>";


echo "</table>";
echo "</div>";
 

$conn->close();

?>

</body>

</html>