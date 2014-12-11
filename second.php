 <!DOCTYPE html>

<html>

<body>
select the player
<form action="sam1.php" method="POST">
<select name="pid1"onchange='this.form.submit()'>

 <?php
            $value = $_POST["type"];
			//echo $value;
			if($value==='1')
			echo "GOALKEEPER SELECTED"."</br>";
			else if($value==='2')
			echo "STRIKER SELECTED\n"."</br>";
			else if($value==='3')
			echo "FORWARD SELECTED\n"."</br>";
			else
			echo "MIDFIELDER SELECTED\n"."</br>";
			
			
			echo "\nTHE SELECTED TYPE OF PLAYER LIST IS\n "."</br>";
			
			
		
			
			


			
			
	
	
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

$sql = "SELECT id, Name  FROM players WHERE type = '$value' AND status='0' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     //while($row = $result->fetch_assoc()) {
        // echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
	$v=0;
	$v1='SELECT';
	  echo "<option value =$v>$v1</option>";
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td></tr>";
		$var=$row["Name"];
		$var1=$row["id"];
		//echo $var1;
		//echo $var;
		//echo "<option>$var1</option>";
		echo "<option value=$var1>$var</option>";
    }
   // echo "</table>";
     }
 else {
     echo "0 results";
}

$conn->close();

   



?> 


</select>

</form>


</body>
</html>

			



