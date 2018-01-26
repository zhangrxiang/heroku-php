<?php
//info
//phpinfo();
include "function.php";
$hostname = gethostname();
echo $hostname.br();
echo getIp().br();
echo getServerIP();
echo br();
listServer();
//echo "<pre>";
//var_dump($_SERVER);