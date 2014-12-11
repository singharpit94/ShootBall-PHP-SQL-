 <!DOCTYPE html>

<html>

<body>
<?php
     $val=$_POST["pid1"];
	 
$servername = "localhost";
$username = "root";
$password = "25577777";
$dbname = "SAS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Name, type,price,points FROM players WHERE id = '$val'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     //while($row = $result->fetch_assoc()) {
         echo "<table><tr><th>Name</th><th> BASE Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["price"]."</td></tr>";
		//$var=$row['Name'];
		//$var1=$row['id'];
		//echo $var1;
		//echo $var;
    }
    echo "</table>";
     }
 else {
     echo "0 results";
}
$conn->close();

   



?> 
<h2>Enter the required fields</h2>
<p>
<form action="main.php" method="post">

<select name="tid">
  <option value =" ">Select...</option>
  <option value=1>TEAM 1</option>
  
<option value=2>TEAM 2</option>
<option value=3>TEAM 3</option>
<option value=4>TEAM 4</option>
<option value=5>TEAM 5</option>
<option value=6>TEAM 6</option>
<option value=7>TEAM 7</option>
<option value=8>TEAM 8</option>
</select>


</p>
<p>
<form action="main.php" method="POST">
   <select name="pri">
  <option value =" ">Select...</option>
  <option value=10>10 $</option>
  
<option value=20> 20 $</option>
<option value=30> 30 $</option>
<option value=40> 40 $</option>
<option value=50> 50 $</option>
<option value=60> 60 $</option>
<option value=70>70 $</option>
<option value=80> 80 $</option>
<option value=90> 90 $</option>
<option value=100> 100 $</option>


</select>

<form action="main.php" method="POST">
Player NAME : <input type="text" name="pn"><br>
   

<input type="submit">


</body>
</html>

