<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($db, "delete from barang where id='$id'");
header("location:barang.php");

?>