
<?php
$Producent=$_GET["Producent"];
$Tytul=$_GET["Tytul"];
//$Cena=$_GET["Cena"];
//$Klucz=$_GET["Klucz"];

$con= new mysqli ("127.0.0.1", "root", "","keysoft");

//$q2="SELECT * FROM dane (Producent, Tytul, Cena, Klucz) VALUES ('".$Producent."', '".$Tytul."'); ";
//$q="SELECT * FROM dane";

function ubisoft()
{
	location.href =="TEST.PHP"; 
}

$sql = "SELECT Lp, Producent, Tytul, Klucz FROM dane";
$result = $con->query($sql);

if($result=$con->query($sql)) 
{
	while($row=$result->fetch_array()) 
	{	
		// echo $row[1] . " " . $row["Tytul"] . " " . $row["Klucz"] . "<br/>";
	}
}




if ($Producent=="Ubisoft")
{
	header("refresh: 0.1; url=games_data/Ubisoft/user_search_ubisoft.php");
}


if ($Producent=="EA")
{
	header("refresh: 0.1; url=games_data/EA/user_search_EA.php");
}


if ($Producent=="CdProjektRed")
{
	header("refresh: 0.1; url=games_data/CD Projekt Red/user_search_cdprojekt.php");
}


if ($Producent=="SquareEnix")
{
	header("refresh: 0.1; url=games_data/Square Enix/user_search_squareenix.php");
}


if ($Producent=="SCSSoftware")
{
	header("refresh: 0.1; url=games_data/SCS Software/user_search_SCS.php");
}

//else
//{
	
	//echo $con->errno . " " . $con->error;
//}




?>