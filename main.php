<?php
 $pn1= $_POST["pn"];
 //echo $pid1."</br>";
 
 $tid1= $_POST["tid"];
 //echo $tid1."<br/>";
 $pri1= $_POST["pri"];
 //echo $pri1."</br>";
 
 
 
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
$sql = "SELECT * FROM players WHERE Name = '$pn1' ";
$result = $conn->query($sql);
if ($result->num_rows == 0)
{echo "NO player exist with this name";
echo "</br>"."<a href=drop.html>Click Here to BID AGAIN !</a>";
}
else{
$sql1 = "SELECT * FROM list WHERE id = '$tid1' ";
$result1 = $conn->query($sql1);
$row=$result->fetch_assoc();
$row1=$result1->fetch_assoc();
if($row1["penality"]<'2')
{      $ctr=$row1["total"];
        if($ctr<'15')
		{
	
        if($row1["budget"]-$row["price"]>='0')
		{


       $count=$row1["total"] + 1;
	   $ptype=$row["type"];
	   $pname=$row["Name"];
	   $price=$row["price"];
	   $points=$row["points"];
	   $status=$row["status"];
	   $count1=strval($count);
	   if($ptype==='1')
	   {
	            $min=2;
				$max=5;
				$goli=$row1["goal"]+1;
				$restg=$goli-$min;
				$bg=$row1["budget"]-$row["price"];
				$bp=$row1["points"]+$row["points"];
				
				
				
				      if($goli<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',goal='$goli',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "player  Updated";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
                                                             echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  else if($row1["rest"]<3) {
								          
                                               
												





										  $sql="UPDATE list SET `".$count."`= '$pname',goal='$goli',total='$count',budget='$bg',points='$bp',rest='$restg' WHERE id = '$tid1'";
							                                  if($conn->query($sql) === TRUE){
		                                                     echo "player rest  Updated";
															  $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }  
								  }
				
				
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		             $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		             if($conn->query($sql) === TRUE){
		              echo "Penality  Updated";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=drop.html>Click Here to GO BACK</a>";
					  
				}
				
	   }
	   if($ptype==='2'){
	            $min=2;
				$max=5;
				$striker=$row1["strike"]+1;
				$rests=$striker-$min;
				$bg=$row1["budget"]-$row["price"];
				$bp=$row1["points"]+$row["points"];
				

				
				      if($striker<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',strike='$striker',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "player  Updated";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  else if($row1["rest"]<3){
								           $sql="UPDATE list SET `".$count."`= '$pname',stike='$striker',total='$count',budget='$bg',points='$bp',rest='$rests' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "player rest  Updated";
														     $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }  
								  }
				
				
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penality  Updated";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=drop.html>Click Here to GO BACK</a>";
					  
					  
				}
		                 
	   
	   
	      
	   
	   
	   }
	   
	   if($ptype=='3'){
	     $min=4;
				$max=7;
				$forward=$row1["ford"]+1;
				$restg=$forward-$min;
				$bg=$row1["budget"]-$row["price"];
				$bp=$row1["points"]+$row["points"];
				
				
				
				      if($forward<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',ford='$forward',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "player  Updated";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  elseif($row1["rest"]<3) {
								           $sql="UPDATE list SET `".$count."`= '$pname',ford='$forward',total='$count',budget='$bg',points='$bp',rest='$restg' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "player rest  Updated";
															  $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }  
								  }
				
				
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penality  Updated";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=drop.html>Click Here to GO BACK</a>";
					  
				}
	   }
	    if($ptype==='4'){
		$min=4;
				$max=7;
				$midf=$row1["mid"]+1;
				$restg=$midf-$min;
				$bg=$row1["budget"]-$row["price"];
				$bp=$row1["points"]+$row["points"];
				
				
				
				      if($midf<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',mid='$midf',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "player  Updated";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  else if($row1["rest"]<3) {
								           $sql="UPDATE list SET `".$count."`= '$pname',mid='$midf',total='$count',budget='$bg',points='$bp',rest='$restg' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "player rest  Updated";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=drop.html>Click Here to BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }  
								  }
				
				
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penality  Updated";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=drop.html>Click Here to GO BACK</a>";
					  
				}
		}
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
       }
	   else
	   {
          echo "Insufficient Budget"."</br>";
          
		  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penality  Updated";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=drop.html>Click Here to GO BACK</a>";
		  
		  }
		  
}
else{
            echo"Already 15 players Can't Buy More";
			echo "</br>"."<a href=drop.html>Click Here to GO BACK</a>";
			
}
    
	   
}

else
{
   echo "Team is DisQualifeid"."</br>";
   echo "<a href=drop.html>Click Here to GO BACK</a>";

}  
    echo "</br>";
   echo "<a href=fourth.html>Click Here to Display Team Status</a>";
 
 $conn->close();
 }
 ?>
 