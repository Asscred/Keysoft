<!DOCTYPE html>
<html>
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
  margin-left: 63%;
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
<body>

<center>
<div class='myDiv'>
<p style='font-size:30px;'>- KEYSOFT -</p> 
<a href='adminpanel.html'>Powrót</a><br><br>
</center>
</div>

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
		<td>
		<a href="delete.php?id=<?php echo $row['Lp']; ?>">Delete</a>
		</td>
		</tr>
		<?php
			}
		?>	
		
    </tbody>
    </table>
		<center>
	<br><br><br>
	</center>
  </div>
  
</body>
</html>