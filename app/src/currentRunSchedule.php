<?php
date_default_timezone_set('America/New_York');
include('../../resources/db/dbtest.php');
$startDate = new DateTime('2020-05-25');
$now = new DateTime('now');
//$diffDate = $today->diff($startDate);
print_r($startDate);
print_r($now);
print "<br/>";
$diff = ($startDate->diff($now))->days;
print_r($diff);