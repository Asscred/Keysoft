
<html>
<head>
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

#myProgress {
  width: 80%;
  background-color: #dde;
    font-size: 25px;
  margin:auto;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: navy;
  color: white;
}

p {
  color: #f8de7e;
  font-size: 20px;

}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<script>

var i = 0;
window.onload = function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
}

</script>

	 

<center>

<!-- Podstawowe pole tekstowe -->
<br><br>
<p style="font-size:40px;">- KEYSOFT - <br> <span style="font-size:19px;">The Cheapest Keys On The Market</span></p>
<br><br><br><br><br><br><br>
<p style="font-size:40px;">Płatność w toku...</p>
</center>



<div id="myProgress">
  <div id="myBar">10%</div>
</div>

<script>
 function sleep(milliseconds) {  
      return new Promise(resolve => setTimeout(resolve, milliseconds));  
   }  
   
   await sleep(1500);

</script>


</html>


<?php
$Producent=$_GET["Producent"];
$Tytul=$_GET["Tytul"];
//$Cena=$_GET["Cena"];
//$Klucz=$_GET["Klucz"];

$con= new mysqli ("127.0.0.1", "root", "","keysoft");

//$q2="SELECT * FROM dane (Producent, Tytul, Cena, Klucz) VALUES ('".$Producent."', '".$Tytul."'); ";
//$q="SELECT * FROM dane";


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
	header("location:games_data/Ubisoft/r6_zaplacone.php");
}

if ($Tytul=="Valhalla") 
{
	header("location:games_data/Ubisoft/valhalla_zaplacone.php");
}



?>











