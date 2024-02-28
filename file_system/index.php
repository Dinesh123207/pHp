<?php
// Magic constants
echo __DIR__;
echo __FILE__;
echo __LINE__;

// Create directory
mkdir('test');

// Rename directory
rename('test','new_test');


// Delete directory
rmdir('new_test');

// Read files and folders inside directory
echo file_get_contents('lorem.txt');

// file_get_contents, file_put_contents
$file = scandir('./'); 

// file_get_contents from URL
$userJson = file_get_contents('https://www.dronanotes.live/');
echo $userJson;

// https://www.php.net/manual/en/book.filesystem.php helpful link
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file