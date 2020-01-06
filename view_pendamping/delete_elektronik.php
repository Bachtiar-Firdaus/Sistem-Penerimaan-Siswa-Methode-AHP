<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that user
$id = $_GET['id_kegiatan'];
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tbl_kegiatan WHERE id_kegiatan=$id");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/keterampilan_elektronik");
?>

