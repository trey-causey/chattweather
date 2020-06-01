<?php

require 'config.inc.php';

$link = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME, DBPORT);

if($link->connect_errno)
{printf("that failed: %s, \n", $link->connect_error);}