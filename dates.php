<?php
echo date('y-m-d H-i-s');
// yesterday
echo date('y-m-d H:i:s', time()-60*60*24).'<br>';

$parsedate = date_parse('2024-3-12 09:00:00');
var_dump($parsedate);
?>