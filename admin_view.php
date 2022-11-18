<html>
<head> <title> KEYSOFT - ADMIN VIEW </title></head>
<style>

body {
  background-image: url("74166.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
   color: #f8de7e;
   margin:auto;
   position:relative;
}


td {
  border: 1px solid #dddddd;
  text-align: center;
  padding:8px;
}

th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 10px;
}

div {
margin-top: auto;
 margin-bottom: auto;
  margin-right: 1%;
  margin-left: 66%;
}

.myDiv {
margin-top: 9%;
  margin-bottom: 2%;
  margin-right: 1%;
  margin-left: 75%;
}

.myDiv1 {
margin-top: 14%;
  margin-bottom: -14%;
  margin-right: 1%;
  margin-left: 75%;
}

p {
  color: #f8de7e;
  font-size: 20px;
}

</style>
</html>


<?php
//$Producent=$_GET["Producent"];
//$Tytul=$_GET["Tytul"];
//$Cena=$_GET["Cena"];
//$Klucz=$_GET["Klucz"];

$con= new mysqli ("127.0.0.1", "root", "","keysoft");

//$q2="SELECT * FROM dane (Producent, Tytul, Cena, Klucz) VALUES ('".$Producent."', '".$Tytul."'); ";
//$q="SELECT * FROM dane";


$all = "SELECT Lp, Producent, Tytul, Cena, Klucz FROM dane";
$result = $con->query($all);

echo "<center>";
echo "<div class='myDiv'>";
echo "<p style='font-size:30px;'>- KEYSOFT -</p> ";
echo "<a href='adminpanel.html'>Powrót</a><br>";
echo "</center>";
echo "</div>";

//echo "<div class='myDiv1'>";
//echo"<table>";
//echo "<tr>";
//echo "<th> ID </th>";
//echo "<th> Producent </th>";
//echo "<th> Tytul </th>";
//echo "<th> Cena </th>";
//echo "<th> Klucz </th>";
//echo "</tr>";
//echo"</table>";
//echo "</div>";

?>
<html>
<body>
  <div>
	<table>
    <thead>
	 <th>ID</th>
	 <th>Producent</th>
	 <th>Tytul</th>
	 <th>Cena</th>
	 <th>Klucz</th>
    </thead>

    <tbody>
	<?php
    include('conn.php');
	$query=mysqli_query($conn,"select * from `dane`");
	while($row=mysqli_fetch_array($query)){
	?>		
		<tr>
		<td><?php echo $row['Lp']; ?></td>
		<td><?php echo $row['Producent']; ?></td>
		<td><?php echo $row['Tytul']; ?></td>
		<td><?php echo $row['Cena']; ?></td>
		<td><?php echo $row['Klucz']; ?></td>
		<!-- <td> -->
		<!-- <a href="delete.php?id=<?php // echo $row['Lp']; ?>">Delete</a> -->
		<!-- </td> -->
		</tr>
		<?php
			}
		?>	
    </tbody>
    </table>
	<center>
	<br>
	</center>
  </div>
</html>


<?php



//if($result=$con->query($all)) 
//{
//	while($row=$result->fetch_array()) 
//	{	
	//	echo "<div>";
	//	echo"<table>";
			// echo "<tr>";
		//	echo "<td>".$row["Lp"]."</td>"; 
		//	echo "<td>".$row["Producent"]."</td>"; 
		//	echo "<td>".$row["Tytul"]."</td>";
		//	echo "<td>".$row["Cena"]."</td>";
		//	echo "<td>".$row["Klucz"]."</td>";
			// echo "</tr>";
			//echo"</table>";
			//echo "</div>";
//	}
//}


//else
//{
	
	//echo $con->errno . " " . $con->error;
//}
//echo "<div class='myDiv'>";
//echo "<br><br><br><br> <a href='adminpanel.html'>Powrót</a>";
//echo "</div>";

?>