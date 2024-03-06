<?php

$url = 'https://jsonplaceholder.typicode.com/users';
 $resource = curl_init($url);
 curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);  // Make it so the data from the response can be used

$result = curl_exec($resource);
var_dump($info);
echo $result;


// Sample example to get data.

// Get response status code

// set_opt_array

// Post request
?>