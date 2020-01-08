<?php
$host='localhost';
$user='root';
$pass='';
$basededados='sasuma';
$conn= mysqli_connect("$host", "$user", "$pass") or die ("problema na ligação ao mysql");
mysqli_select_db($conn, "$basededados");
?>