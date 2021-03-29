<?php
include "conection.php";
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM homes WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}
?>