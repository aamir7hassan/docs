<?php

 /**
 * Transfer Files Server to Server using PHP Copy
 * @link https://shellcreeper.com/?p=1249
 * PUT THIS FILE IN DESTINATION SERVER
 */

/* Source File URL */
$remote_file_url = 'http://technofortress.net/demo/holidayplanner1/holidayplanner-8-2-2020.zip';

/* New file name and path for this file */
$local_file = 'files.zip';

/* Copy the file from source url to server */
$copy = copy( $remote_file_url, $local_file );

/* Add notice for success/failure */
if( !$copy ) { 
    echo "Doh! failed to copy $remote_file_url...\n";
}
else{
    echo "WOOT! success to copy $remote_file_url...\n";
}
  
?> 
 