<?php

include('config.inc.php');

$link = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME, DBPORT);

if($link->connect_errno)
{printf("that failed: %s, \n", $link->connect_error);}
/*
$sql = "SELECT * FROM `5kAdv`";

$result = $link->query($sql);

foreach ($result as $row)
{
    printf(
        '<li>%s, %s, %s, %s, %s, %s, %s, %s</li>',
        htmlspecialchars($row['WeekNum'], ENT_QUOTES),
        htmlspecialchars($row['Monday'], ENT_QUOTES),
        htmlspecialchars($row['Tuesday'], ENT_QUOTES),
        htmlspecialchars($row['Wednesday'], ENT_QUOTES),
        htmlspecialchars($row['Thursday'], ENT_QUOTES),
        htmlspecialchars($row['Friday'], ENT_QUOTES),
        htmlspecialchars($row['Saturday'], ENT_QUOTES),
        htmlspecialchars($row['Sunday'], ENT_QUOTES)
    );
}
*/
$link->close();