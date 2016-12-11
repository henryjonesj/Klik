<?php
$files = array('song.html', 'index.html');
$zip = new ZipArchive;
$zip->open('file.zip', ZipArchive::CREATE);
foreach ($files as $file) {
  $zip->addFile($file);
}
$zip->close();



?>