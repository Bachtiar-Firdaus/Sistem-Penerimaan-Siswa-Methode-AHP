<?php
// include database connection file
include_once("config.php");
// include_once("alternatif.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tbl_cs WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:http://localhost/siks_ahp/dashboard.php?page=insert/alternatif");
?>