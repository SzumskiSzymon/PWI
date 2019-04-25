<?php
session_start();
$_SESSION['var'] = "Ala ma kota"."<br>";
echo $_SESSION['var']."<br>";
echo '<a href="12.php">12</a>';
?>