<?php 
$id = $_GET['id'];
require "app.php";
$h = hapusData($conn, $id);
header("Location: /index.php");
?>

<?php
mysqli_close($conn);
?>