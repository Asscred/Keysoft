 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="table.css"/>
	</head>
	
	
	<h2> TRYB ADMINISTRATORA </h2>

 
 <?php
      $con= new mysqli ("127.0.0.1", "root", "","keysoft");

        if (mysqli_connect_errno())
           {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
              $result = mysqli_query($con,"SELECT * FROM dane");
			  
			   $id = $_GET[$id];


              echo "<form action='admin_add.php' method='get' enctype='text/plain'><div>";
              while($row = mysqli_fetch_array($result))
              {
                
				echo "<table>";
				echo "<tr>";
				echo "<td><input type='radio' name='jj' name ='selectdelete' id='".$id."'></input></td>";
				echo "<td>";
				echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] .  "<br/>";
				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "</form>";
				
              } 
                echo '<input type = "submit" value = "DELETE" name = "submitdelete">';
                echo '</form>';
				
				$sql = mysql_query("DELETE FROM `dane` WHERE `Id` = '$id'");
				 
				
				
				
 ?>
 
</html>