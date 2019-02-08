<?php

// set up the settings
$ftp_server = '192.168.1.10';
$ftpuser = 'pi';
$ftppass = 'raspberry';

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftpuser, $ftppass);

// Delete all files in the folder html
$html_dir = "/var/www/html/";
ftp_chdir($conn_id, $html_dir);
$files = ftp_nlist($conn_id, "*.jpg");
$files1 = ftp_nlist($conn_id, "*.png");
foreach ($files as $file)
{
    ftp_delete($conn_id, $file);
}    

foreach ($files1 as $file)
{
	ftp_delete($conn_id, $file);
}

// close the connection
ftp_close($conn_id);
header("Refresh:0; url=upload.php");
?>
