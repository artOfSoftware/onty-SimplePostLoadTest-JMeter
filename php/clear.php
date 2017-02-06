<?php

$file_name = "postlog.txt";

$result = 1;

if ( file_exists($file_name) )
	$result = unlink($file_name);

if ( $result )
	die("OK");
else
	dir("fail");

?>
