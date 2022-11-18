<?php
$Producent=$_GET["Producent"];
$Tytul=$_GET["Tytul"];
//$Cena=$_GET["Cena"];
//$Klucz=$_GET["Klucz"];

$con= new mysqli ("127.0.0.1", "root", "","keysoft");

//$q2="SELECT * FROM dane (Producent, Tytul, Cena, Klucz) VALUES ('".$Producent."', '".$Tytul."'); ";
//$q="SELECT * FROM dane";


//$all = "SELECT Lp, Producent, Tytul, Klucz FROM dane";
//$result = $con->query($all);

//if($result=$con->query($all)) 
//{
	//while($row=$result->fetch_array()) 
	//{	
		//echo $row["Producent"] . " " . $row["Tytul"] . " " . $row["Klucz"] . "<br/>";
	//}
//}



$ubisoft = "SELECT Lp, Producent, Tytul, Klucz FROM dane WHERE Producent ='Ubisoft'";
$result = $con->query($ubisoft);

if($result=$con->query($ubisoft)) 
{
	while($row=$result->fetch_array()) 
	{	
		echo $row[1] . " " . $row["Tytul"] . " " . $row["Klucz"] . "<br/>";
	}
}








else
{
	
	echo $con->errno . " " . $con->error;
}




?>