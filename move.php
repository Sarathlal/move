<?php
// Insert this file on server and go to the path from browser.
set_time_limit(0); //Unlimited max execution time
$path = 'newfile.zip'; // Name of the file to be saved on server
$url = 'http://your_old_domain.com/file.zip'; //File URL to be moved
$newfname = $path;
echo 'Starting Download!<br>';
$file = fopen ($url, "rb");
if($file) {
	$newf = fopen ($newfname, "wb");
	if($newf)
		while(!feof($file)) {
			fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
			echo '1 MB File Chunk Written!<br>';
		}
}
if($file) {
	fclose($file);
}
if($newf) {
	fclose($newf);
}
echo 'Finished!';
?>
