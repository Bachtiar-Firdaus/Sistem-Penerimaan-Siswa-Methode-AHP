<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tbl_cs WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:http://localhost/program_april/dashboard.php?page=insert/calon_siswa");
?>