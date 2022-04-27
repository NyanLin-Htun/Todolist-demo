<?php

define('MYSQl_HOST','localhost');
define('MYSQL_DBNAME','Todo');
define('MYSQL_USER','root');
define('MYSQL_PASS','Aaa123!@');

$pdo = new PDO('mysql:host='.MYSQl_HOST.';dbname='.MYSQL_DBNAME, MYSQL_USER, MYSQL_PASS);