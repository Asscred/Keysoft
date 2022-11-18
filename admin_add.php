<html>
<style>
body {
  background-image: url("74166.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
   color: #f8de7e;
   margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 1495px;
  </style>
  </html>


<?php
$Producent=$_GET["Producent"];
$Tytul=$_GET["Tytul"];
$Cena=$_GET["Cena"];
$Klucz=$_GET["Klucz"];

$con= new mysqli ("127.0.0.1", "root", "","keysoft");

$q2="INSERT INTO dane (Producent, Tytul, Cena, Klucz) VALUES ('".$Producent."', '".$Tytul."', '".$Cena."', '".$Klucz."'); ";

$wynik=$con->query($q2);
$q="SELECT * FROM dane";
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())

//echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] .  "<br/>";


//else
//{
	
	//echo $con->errno . " " . $con->error;
//}

//echo "<a href='adminadd.html'>Dodaj więcej</a>";


?>

<html>
<script>

function load()
{
	
	location.href = "admin_view.php"; 
	
}

window.onload=load();
</script>

</html>
