
<?php
$Producent=$_GET["Producent"];
//$Tytul=$_GET["Tytul"];
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

echo "<html>";
echo "<style>";

echo "body {";
echo  "background-image: url('74166.jpg');";
echo "background-repeat: no-repeat;";
echo  "background-attachment: fixed;";
echo  "background-size: cover;";
echo   "color: #f8de7e;";
echo  " margin:auto;";
echo  "position:relative;";
echo "}";

echo "</style>";
echo "</html>";


if ($Producent=="Ubisoft") 
{
	header("location:games_data/Ubisoft/user_search_ubisoft.php");
}


if ($Producent=="EA")
{
	header("location:games_data/EA/user_search_EA.php");
}


if ($Producent=="CDProjektRed")
{
	header("location:games_data/CD Projekt Red/user_search_cdprojekt.php");
}


if ($Producent=="SquareEnix")
{
	header("location:games_data/Square Enix/user_search_squareenix.php");
}


if ($Producent=="SCSSoftware")
{
	header("location:games_data/SCS Software/user_search_SCS.php");
}

//else
//{
	
	//echo $con->errno . " " . $con->error;
//}




?>