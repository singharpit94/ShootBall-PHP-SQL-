 


 <?php
            $value = $_POST["type3"];
	   // $capt = $_POST["captain"];
	   // $team = $_POST["teamno"];
		//echo $capt;	
		//echo $team;
{
			if($value==='1')
			echo "Team 1\n"."</br>";
			else if($value==='2')
			echo "Team 2\n"."</br>";
			else if($value==='3')
			echo "Team 3\n"."</br>";
			else if($value==='4')
			echo "Team 4\n"."</br>";
			else if($value==='5')
			echo "Team 5\n"."</br>";
			else if($value==='6')
			echo "Team 6\n"."</br>";
			else if($value==='7')
			echo "Team 7\n"."</br>";
			else
			echo "Team 8\n"."</br>";
			
			
			echo "\nTHE TEAM DETAILS\n "."</br>";
			
			
			
			
			

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

$sql = "SELECT * FROM list WHERE id = '$value' ";
$result = $conn->query($sql);

//echo "<table><tr><th><ID></th><th><Player 1></th><th><Player 2></th><th><Player 3></th><th><Player 4></th><th><Player 5></th><th><Player 6></th><th><Player 7></th><th><Player 8></th><th><Player 9></th><th><Player 10></th><th><Player 11></th><th><Player 12></th><th><Player 13</th><th><Player 14></th><th><Player 15></th><th><goalkeeper></th><th><striker></th><th><mid-fielder></th><th><forward></th><th><rest></th><th><total></th><th><budget></th><th><points></th><th><captain></th></tr>";
//echo "<tr><th><ID></th></tr>";
if ($result->num_rows > 0) {
     // output data of each row
     //while($row = $result->fetch_assoc()) {
         //echo "<tr><th>ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "<tr><td>".$row["id"]."</td><td>".$row["1"]."</td><td>".$row["2"]."</td><td>".$row["3"]."</td><td>".$row["4"]."</td><td>".$row["5"]."</td><td>".$row["6"]."</td><td>".$row["7"]."</td><td>".$row["8"]."</td><td>".$row["9"]."</td><td>".$row["10"]."</td><td>".$row["11"]."</td><td>".$row["12"]."</td><td>".$row["13"]."</td><td>".$row["14"]."</td><td>".$row["15"]."</td><td>".$row["goal"]."</td><td>".$row["strike"]."</td><td>".$row["mid"]."</td><td>".$row["ford"]."</td><td>".$row["rest"]."</td><td>".$row["total"]."</td><td>".$row["budget"]."</td><td>".$row["points"]."</td><td>".$row["captain"]."</td></tr>";
        echo "TEAM ID =".$row["id"]."</br>";
		echo "Player 1 ".$row["1"]."</br>";
		echo "Player 2 ".$row["2"]."</br>";
		echo "Player 3 ".$row["3"]."</br>";
		echo "Player 4 ".$row["4"]."</br>";
		echo "Player 5 ".$row["5"]."</br>";
		echo "Player 6 ".$row["6"]."</br>";
		echo "Player 7 ".$row["7"]."</br>";
		echo "Player 8 ".$row["8"]."</br>";
		echo "Player 9 ".$row["9"]."</br>";
		echo "Player 10 ".$row["10"]."</br>";
		echo "Player 11 ".$row["11"]."</br>";
		echo "Player 12 ".$row["12"]."</br>";
		echo "Player 13 ".$row["13"]."</br>";
		echo "Player 14 ".$row["14"]."</br>";
		echo "Player 15 ".$row["15"]."</br>";
		echo "Goal Keepers   ".$row["goal"]."</br>";
		echo "Strikers   ".$row["strike"]."</br>";
		echo "Forward   ".$row["ford"]."</br>";
		echo "Mid Fielders   ".$row["mid"]."</br>";
		echo "Others   ".$row["rest"]."</br>";
		echo "Total   ".$row["total"]."</br>";
		echo "Budget   ".$row["budget"]."</br>";
		echo "Points   ".$row["points"]."</br>";
		echo "Penalities   ".$row["penality"]."</br>";
		echo "CAPTAIN   ".$row["captain"]."</br>";
		
		
	
	
	}
    //echo "</table>";
     //}
} else {
     echo "0 results";
}

$conn->close();
}
?> 
<html>




<body>
   
	<form action="next.php" method="post">

<select name="teamno">
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


<br><form action="next.php" method="POST">
Enter the captain name of this team: <input type="text" name="captain"><br>
   

<input type="submit">
<br><a href=drop.html>Click Here to return to bidding!</a>


</body>
</html>
			



		


			




