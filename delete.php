<?php
$id=$_GET['id'];
include('conn.php');
mysqli_query($conn,"delete from `dane` where Lp='$id'");
header('location:usuwanie.php');
?>