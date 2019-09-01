<?php
// include database connection file
include_once("config.php");
// include_once("alternatif.php");

// Get id from URL to delete that user
$id = $_GET['id_kriteria'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tb_kriteria WHERE id_kriteria=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:http://localhost/program_april/dashboard_ps_uptd.php?page=insert/kriteria");
?>