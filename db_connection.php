<?php 

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'protofolio');

$connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$connection){
die('Failed');
}

?>