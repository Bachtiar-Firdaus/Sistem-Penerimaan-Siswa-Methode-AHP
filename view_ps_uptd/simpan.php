<?php
// Tentukan folder file yang boleh di download
$folder = "files/";
// Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['file'])) {
  echo "<h1>Access forbidden!</h1>
      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
      echo $folder.$_GET['file'];

  exit;
}

// Apabila mendownload file di folder files
else {
  header("Content-Type: octet/stream");
  header("Content-Disposition: attachment; 
  filename=\"".$_GET['file']."\"");
  $fp = fopen($folder.$_GET['file'], "r");
  $data = fread($fp, filesize($folder.$_GET['file']));
  fclose($fp);
  print $data;
}
?>