<?php 
	$zip = new ZipArchive;
$res = $zip->open('atlantotec.com.zip');
if ($res === TRUE) {
  $zip->extractTo('/home/.sites/69/site772/web/telberia/projects/atlantotec.com');
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}
?>