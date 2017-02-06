<?php

$id   = isset($_GET['id']  ) ? $_GET['id']   : '';
$text = isset($_GET['text']) ? $_GET['text'] : '';

if ( $id=='' || $text=='' )
{
	die('invalid');
}

write_to_file( $id, $text );

?>
<html>
<body>
<p>thank you</p>
</body>
</html>

<?php

exit;


function write_to_file( $id, $text )
{
  $timestamp = date( "Y-m-d H:i:s" );
  $log_line = "{$timestamp}\t${id}\t{$text}\r\n";

  $log_location = ".";	#realpath($_SERVER["DOCUMENT_ROOT"])."/local-logs/";
  $log_filepath = "{$log_location}/postlog.txt";

  // write to file
  if ( ! file_exists($log_filepath) ) {
    $file_handle = fopen( $log_filepath,'c' );
    fwrite( $file_handle, "# new log\r\n\r\n" );
    fclose( $file_handle );
  }

  $file_handle = fopen( $log_filepath,'a' );
  fwrite( $file_handle, $log_line );
  fclose( $file_handle );
}

?>